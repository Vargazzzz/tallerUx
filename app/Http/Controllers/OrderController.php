<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Client;
use App\Models\Component;
use App\Models\Mechanic;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{

    public function index(Request $request){
        $query= Order::orderBy('id','desc');

        if ($request->has('search')){
            $query->where ('n_order', 'like', '%'. $request->input('search').'%');
        }

        $orders = $query->get();

        return view('orders.index', compact('orders'));
    }
    
    /*public function create(Order $order){

        $component= Component::all();
        return view('orders.create',compact('component','order'));
    }*/

    public function create(){
        return view('orders.create');
    }

    public function store(Request $request){

        $request->validate([
            'n_order' => 'required|min:4|unique:orders',
            'status' => 'required|min:3|max:255',
            'ci_client' => 'required|exists:clients,ci',
            'ci_mechanic' => 'required|exists:mechanics,ci',
            'serial' => 'required|exists:bicycles,serial'
        ]);

        $ci_client= $request->ci_client;
        $client= Client::where('ci',$ci_client)->first();
        
        if(!$client){
            return redirect()->back()->withErrors(['ci'=>'Cliente no encontrado']);
        }

        $ci_mechanic= $request->ci_mechanic;
        $mechanic= Mechanic::where('ci',$ci_mechanic)->first();

        if(!$mechanic){
            return redirect()->back()->withErrors(['ci'=>'Cliente no encontrado']);
        }

        $serial= $request->serial;
        $bicycle= Bicycle::where('serial',$serial)->first();

        if(!$bicycle){
            return redirect()->back()->withErrors(['ci'=>'Cliente no encontrado']);
        }

        $orderData= $request->only(['n_order',
        'status',]);
        $orderData['client_id'] = $client->id;
        $orderData['mechanic_id'] = $mechanic->id;
        $orderData['bicycle_id'] = $bicycle->id;

        Order::create($orderData);

        /*$order=Order::create($request->all());*/
        
        return redirect('/ordenes');
    }

    public function addComponent(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $component = Component::findOrFail($request->component_id);
        $quantity = $request->quantity;
        $total = $quantity * $component->price;

        $order->components()->attach($component, ['quantity' => $quantity, 'total' => $total]);

        return redirect()->route('orders.show', $orderId)->with('success', 'Componente agregado a la orden exitosamente.');
    }

    public function show($id)
    {
        $order = Order::with('components')->findOrFail($id);
        $totalCost = $order->total_cost;
        $components = Component::all();

        return view('orders.show', compact('order', 'totalCost', 'components'));
    }

    public function removeComponent($orderId, $componentId){
        $order = Order::findOrFail($orderId);
        $order->components()->detach($componentId);

        return redirect()->route('orders.show', $orderId)->with('success', 'Componente eliminado de la orden exitosamente');
    }
    
    public function destroy(Order $order){
        $order->delete();
        return redirect('/ordenes');
    }
    
}
