@extends('products.layout')

@section('title')
    Edit product
@endsection

@section('body')
    <form action="/products/{{ $product->id }}" method="post">
        @csrf
        @method('put')
        <select name="product" required>
            <option value="Book" @if ($product->product == "Book") selected @endif>Book</option>
            <option value="Cd" @if ($product->product == "Cd") selected @endif>CD</option>
            <option value="Game" @if ($product->product == "Game") selected @endif>Game</option>
        </select><br><br>
        <input type="text" name="title" placeholder="Title" value="{{ $product->title }}" required><br><br>
        <input type="text" name="name" placeholder="Author/Artist/Console" value="{{ $product->name }}" required><br><br>
        <input type="text" name="feature" placeholder="Pages/Duration/PEGI" value="{{ $product->feature }}" required><br><br>
        <input type="number" name="price" placeholder="Price" value="{{ $product->price }}" required><br><br>
        <input type="submit" value="Update">
    </form>
@endsection