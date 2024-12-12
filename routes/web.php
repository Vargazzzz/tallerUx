<?php

use App\Http\Controllers\BicycleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PdfController;
use App\Models\Bicycle;
use App\Models\Client;
use App\Models\Mechanic;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
//ruta temporal
Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/clientes', [ClientController::class, 'index']);

Route::get('/clientes/crear',[ClientController::class,'create']);

Route::post('/clientes', [ClientController::class,'store']);

Route::get('/clientes/{client}',[ClientController::class,'show']);

Route::get('/clientes/{client}/edit',[ClientController::class,'edit']);

Route::put('clientes/{client}',[ClientController::class,'update']);

Route::delete('/clientes/{client}',[ClientController::class,'destroy']);


Route::get('/bicicletas', [BicycleController::class, 'index']);

Route::get('/bicicletas/crear',[BicycleController::class,'create']);

Route::post('/bicicletas', [BicycleController::class,'store']);

Route::get('/bicicletas/{bicycle}',[BicycleController::class,'show']);

Route::get('/bicicletas/{bicycle}/edit',[BicycleController::class,'edit']);

Route::put('bicicletas/{bicycle}',[BicycleController::class,'update']);

Route::delete('/bicicletas/{bicycle}',[BicycleController::class,'destroy']);


Route::get('/componentes', [ComponentController::class, 'index']);

Route::get('/componentes/crear',[ComponentController::class,'create']);

Route::post('/componentes', [ComponentController::class,'store']);

Route::get('/componentes/{component}',[ComponentController::class,'show']);

Route::get('/componentes/{component}/edit',[ComponentController::class,'edit']);

Route::put('componentes/{component}',[ComponentController::class,'update']);

Route::delete('/componentes/{component}',[ComponentController::class,'destroy']);


Route::get('/mecanico',[MechanicController::class, 'index']);

Route::get('/mecanico/crear',[MechanicController::class,'create']);

Route::post('/mecanico', [MechanicController::class,'store']);

Route::get('/mecanico/{mechanic}',[MechanicController::class,'show']);

Route::get('/mecanico/{mechanic}/edit',[MechanicController::class,'edit']);

Route::put('mecanico/{mechanic}',[MechanicController::class,'update']);

Route::delete('/mecanico/{mechanic}',[MechanicController::class,'destroy']);


Route::get('/ordenes', [OrderController::class, 'index']);

Route::get('/ordenes/crear',[OrderController::class,'create']);

Route::post('/ordenes', [OrderController::class,'store']);

//Route::get('/ordenes/{order}',[OrderController::class,'show']);

//Route::post('/ordenes/{order}/componentes',[OrderController::class, 'addComponent']);

// Ruta para mostrar la orden
Route::get('ordenes/{order}', [OrderController::class, 'show'])->name('orders.show');

// Ruta para agregar componentes a la orden
Route::post('ordenes/{order}/componentes', [OrderController::class, 'addComponent'])->name('orders.addComponent');

Route::delete('ordenes/{order}/componentes/{component}', [OrderController::class, 'removeComponent'])->name('orders.removeComponent');

Route::delete('/ordenes/{order}',[OrderController::class,'destroy']);

Route::get('ordenes/{order}/pdf', [PDFController::class, 'generatePDF'])->name('orders.generatePDF');

Route::get('ordenes/{order}/reporte', [PdfController::class, 'generatePDF'])->name('orders.report');

Route::put('componentes/{component}',[ComponentController::class,'update']);









Route::get('/prueba',function(){

    $client= client::find(1);

    return $client->bicycles;
   
    /* crear cliente  
    
    $bicyle = new Bicycle;

    $bicyle->serial= 'wsbc10000';
    $bicyle->type = 'mtb';
    $bicyle->model = 'epic 8';
    $bicyle->brand = 'specialized';
    $bicyle->color = 'roja';
    $bicyle->client_id = '1';


    $bicyle->save();
    
    return $bicyle; */


    /*modificar cliente
    $client = Client::find(1);

    $client = Client::where('ci','28031356')
                ->first();
    $client->name = 'jose vargas';
    $client->save();*/

    /*mostrar todos los registros
    $client = Client::all();
    */
    
    /*$client = Client::where('id','>=','2')
                ->get();*/
    
    
    
    /*$clients=Client::get();
    
    $clients = Client::orderBy('id','desc')
                ->select('ci','name','phone')
                ->get();

    return $clients;*/

    /*eliminar registro */

    /*  $client=Client::find(1)
        $client->delete();
    */

    

});