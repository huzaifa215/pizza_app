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

}

