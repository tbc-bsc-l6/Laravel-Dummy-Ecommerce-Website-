@extends('products.layout')

@section('title')
    Create page
@endsection

@section('body')
    <div class="px-6">
        <form action="/products" method="post">
            @csrf
            <select name="product">
                <option value="Book">Book</option>
                <option value="Cd">CD</option>
                <option value="Game">Game</option>
            </select><br><br>
            <input type="text" name="title" placeholder="Title"><br><br>
            <input type="text" name="name" placeholder="Author/Artist/Console"><br><br>
            <input type="text" name="feature" placeholder="Pages/Duration/PEGI"><br><br>
            <input type="number" name="price" placeholder="Price"><br><br>
            <input type="submit" value="Post" class="bg-gray-800 text-white font-bold p-2 w-20 rounded">
        </form>
    </div>
@endsection