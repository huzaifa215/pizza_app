
@extends('layouts.layout')
@section('content')
<link href="/css/main2.css" rel="stylesheet">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <div clas="wapper pizza-details">
                      <h1>Order for {{$pizza->name}}</h1>
                      <p class="type">Type of Pizza--{{$pizza->type}}</p>
                      <p class="base">Base of Pizza--{{$pizza->base}}</p>
                      <p class="toppings">Extra toppings:</p>
                      <ul>
                          @foreach ($pizza->toppings as $topping)
                            <li>{{$topping}}</li>
                          @endforeach
                      </ul>
                </div>
                <br>
                <a href="/pizzas" class="back"><button>Back to all Pizzas</button></a>


            </div>
        </div>

        </div>
        @endsection
