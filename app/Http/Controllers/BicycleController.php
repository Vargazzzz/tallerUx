<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Client;
use Illuminate\Http\Request;


class BicycleController extends Controller
{
    public function index(){
        $bicycles = Bicycle::orderBy('id','desc')
                    ->paginate(5);
        return view('bicycles.index', compact('bicycles'));
    }

    public function create(){
        
        return view('bicycles.create');
    }

    public function store(Request $request){

        $request->validate([
            'serial' => 'required|min:7|unique:bicycles',
            'type' => 'required|min:3|max:255',
            'model' => 'required|min:5|max:255',
            'brand' => 'required|min:5|max:255',
            'color' => 'required|min:5|max:255',
            /*'client_id' => 'required',*/
            'ci' => 'required|exists:clients,ci'
            
        ]);

        $ci= $request->ci;
        $client= Client::where('ci',$ci)->first();

        if(!$client){
            return redirect()->back()->withErrors(['ci'=>'Cliente no encontrado']);
        }

        $bicycleData= $request->only(['serial',
        'type',
        'model',
        'brand',
        'color',]);
        $bicycleData['client_id'] = $client->id;

        Bicycle::create($bicycleData);

        /*Bicycle::create($request->all());*/
        return redirect('/bicicletas');
    }

    public function show(Bicycle $bicycle){
        return view('bicycles.show',compact('bicycle'));
    }

    public function edit(Bicycle $bicycle){
        return view('bicycles.edit', compact ('bicycle'));
    }

    public function update(Request $request, Bicycle $bicycle){

        $request->validate([
            'serial' => "required|min:7|unique:bicycles,serial,{$bicycle->id}",
            'type' => 'required|min:3|max:255',
            'model' => 'required|min:5|max:255',
            'brand' => 'required|min:5|max:255',
            'color' => 'required|min:5|max:255',
            'ci' => 'required',
        ]);

        $newCi=$request->ci;
        $newClient = Client::where('ci',$newCi)->first();

        if(!$newClient){
            return redirect()->back()->withErrors(['ci'=>'Cliente no encontrado']);
        }

        $bicycle->update([
            'serial' => $request->serial,
            'type' => $request-> type,
            'model' => $request->model,
            'brand'=> $request->brand,
            'color'=> $request->color,
            'client_id'=>$newClient->id
        ]);

        /*$bicycle->update($request->all());*/
      
        return redirect("/bicicletas/{$bicycle->id}");

      

    }

    public function destroy(Bicycle $bicycle){
        $bicycle->delete();
        return redirect('/bicicletas');
    }
}
