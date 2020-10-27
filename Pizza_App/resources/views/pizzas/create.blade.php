
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

            <div class="content" >
                <div class="title m-b-md">
                    <center>
                 <div class="wapper create-pizza>">
                     <h1>Create a pizza for the order</h1>
                     <form action="/pizzas" method="POST">
                        {{-- cross side requsest  to handel 419 erore--}}
                        @csrf

                         <label for="name">Your name :</label>
                         <input type="text" id="name" name="name">
<br>
<br>
                         <label for="type">Chose your own Pizza type:</label>
                        <select name="type" id="type">
                            <option value="margarita">Margarita</option>
                            <option value="hawaiian">Hawaiian</option>
                            <option value="veg supreme">Veg Supereme</option>
                            <option value="volcano">volcano</option>
                        </select>
<br>
<br>
                        <label for="base">Chose your own Pizza base type :</label>
                        <select name="base" id="base">
                            <option value="cheesy crust">Cheesy crust</option>
                            <option value="garlic crust">Garlic Crust </option>
                            <option value="thin & crust">Thin And Crust</option>
                            <option value="thick">Thick</option>
                        </select>

                        <fieldset>
                            <label>Extra Toppings:</label><br>
                            <input type="checkbox" name='toppings[]' value="mushrooms">Mushrooms<br />
                            <input type="checkbox" name='toppings[]' value="peppers">Peppers<br />
                            <input type="checkbox" name='toppings[]' value="garlic">Garlic<br />
                            <input type="checkbox" name='toppings[]' value="olives">Olives<br />

<br>
                        <input type="submit" value="Order Pizza">
                     </form>



                </div>
                <br>
{{--
            </div>

        </div>

        </div> --}}

        @endsection
