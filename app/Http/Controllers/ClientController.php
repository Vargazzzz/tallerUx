<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){

        $query= Client::with('bicycles')->orderBy('id','desc');

        if ($request->has('search')){
            $query->where ('ci', 'like', '%'. $request->input('search').'%');
        }

        $clients = $query->get();

        return view('clients.index', compact('clients'));
    }
    
    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){

        $request->validate([
            'ci' => 'required|min:7|max:11|unique:clients',
            'name' => 'required|min:5|max:255',
            'phone' => 'required|min:11',
            'email' => 'required|min:5|max:255',
            'location' => 'required|min:5|max:255',
        ]);
        
        Client::create($request->all());
        return redirect('/clientes');
    }

    public function show(Client $client){
        return view('clients.show',compact('client'));
    }

    public function edit(Client $client){
        return view('clients.edit', compact ('client'));

    }

    public function update(Request $request, Client $client){

        $request->validate([
            'ci' => "required|min:7|max:11|unique:clients,ci,{$client->id}",
            'name' => 'required|min:5|max:255',
            'phone' => 'required|min:11',
            'email' => 'required|min:5|max:255',
            'location' => 'required|min:5|max:255',
        ]);
        
        $client->update($request->all());
        return redirect("/clientes/{$client->id}");

    }

    public function destroy(Client $client){
        $client->delete();
        return redirect('/clientes');
    }
}

