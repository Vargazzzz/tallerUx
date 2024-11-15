<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index(){
        $components = Component::orderBy('id','desc')
                    ->paginate(5);
        return view('components.index', compact('components'));
    }

    public function create(){
        return view('components.create');
    }

    public function store(Request $request){

        $request->validate([
            'serial' => 'required|min:4|unique:components',
            'description' => 'required|min:5|max:255',
            'brand' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:255',
            'price' => 'required|min:1',
        ]);
        
        Component::create($request->all());
        return redirect('/componentes');
    }

    public function show(Component $component){
        return view('components.show',compact('component'));
    }

    public function edit(Component $component){
        return view('components.edit', compact ('component'));

    }

    public function update(Request $request, Component $component){

        $request->validate([
            'serial' => "required|min:4|unique:components,serial,{$component->id}",
            'description' => 'required|min:5|max:255',
            'brand' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:255',
            'price' => 'required|min:1',
            ]);
        
        $component->update($request->all());
        return redirect("/componentes/{$component->id}");

    }

    public function destroy(Component $component){
        $component->delete();
        return redirect('/componentes');
    }

}
