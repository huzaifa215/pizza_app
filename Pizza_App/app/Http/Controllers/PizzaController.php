<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pizza;
class PizzaController extends Controller
{
    public function index()// show the pizzas page
    {
        $pizzas =Pizza::all();
    return view('pizzas.index',['pizzas'=> $pizzas]);
}

public function show($id)// show the the record fromthe data bse
{
    $pizzas=Pizza::findOrFail($id);
    return view('pizzas.show',['pizza'=>$pizzas]);
}

public function create(){
    return view('pizzas.create');
}
public function store(){
    $pizza=new Pizza();
    $pizza->name=request('name');
    $pizza->type=request('type');
    $pizza->base=request('base');
    $pizza->toppings=request('toppings');
// error log i used to see the data on the terminal to staisfi oweselef
    $pizza->save();
    // The Pizza model have only one tabel so by saving the data the data is updating the table
    return redirect('/')->with('mssg','Thank you for ordering the Pizza');
// with a method because we cnanot send 2 argument in redirect
// so with take the 1 argumet msg amd the 2 the what msg likhe the
// message box in c#
}

public function destory($id){
$pizza=Pizza::findOrFail($id);
$pizza->delete();
return redirect('/pizzas');

}
}

