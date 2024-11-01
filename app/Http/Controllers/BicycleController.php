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
            'client_id' => 'required',
        ]);
        
        Bicycle::create($request->all());
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
            'client_id' => 'required',
        ]);
        
        $bicycle->update($request->all());
        return redirect("/bicicletas/{$bicycle->id}");

    }

    public function destroy(Bicycle $bicycle){
        $bicycle->delete();
        return redirect('/bicicletas');
    }
}
