<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index(){
        $mechanics = Mechanic::orderBy('id','desc')
                    ->paginate(5);
        return view('mechanics.index', compact('mechanics'));
    }
    
    public function create(){
        return view('mechanics.create');
    }

    public function store(Request $request){

        $request->validate([
            'ci' => 'required|min:7|max:11|unique:mechanics',
            'name' => 'required|min:5|max:255',
            'phone' => 'required|min:11',
            'email' => 'required|min:5|max:255',
        ]);
        
        Mechanic::create($request->all());
        return redirect('/mecanico');
    }

    public function show(Mechanic $mechanic){
        return view('mechanics.show',compact('mechanic'));
    }

    public function edit(Mechanic $mechanic){
        return view('mechanics.edit', compact ('mechanic'));

    }

    public function update(Request $request, Mechanic $mechanic){

        $request->validate([
            'ci' => "required|min:7|max:11|unique:clients,ci,{$mechanic->id}",
            'name' => 'required|min:5|max:255',
            'phone' => 'required|min:11',
            'email' => 'required|min:5|max:255',
        ]);
        
        $mechanic->update($request->all());
        return redirect("/mecanico/{$mechanic->id}");

    }

    public function destroy(Mechanic $mechanic){
        $mechanic->delete();
        return redirect('/mecanico');
    }
}
