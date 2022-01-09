@extends('layouts.layout')

@section('title')
    Edit product
@endsection

@section('body')
    <div class="max-w-7xl mx-auto flex justify-center">
        

        <form action="/products/{{ $product->id }}" method="post" class="w-1/2 mt-20">
            @csrf
            @method('put')

            <div class="w-full text-black text-5xl font-semibold">
                <h1>Edit product</h1>
            </div>
            
            <select name="product" class="w-full mt-6" required>
                <option value="Book" @if ($product->product == "Book") selected @endif>Book</option>
                <option value="Cd" @if ($product->product == "Cd") selected @endif>CD</option>
                <option value="Game" @if ($product->product == "Game") selected @endif>Game</option>
            </select>
            
            <input type="text" name="title" placeholder="Title" value="{{ $product->title }}" class="w-full mt-6" required>
            @error('title')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="text" name="name" placeholder="Author/Artist/Console" value="{{ $product->name }}" class="w-full mt-6" required>
            @error('name')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="text" name="feature" placeholder="Pages/Duration/PEGI" value="{{ $product->feature }}" class="w-full mt-6" required>
            @error('feature')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="number" name="price" placeholder="Price" value="{{ $product->price }}" class="w-full mt-6" required>
            @error('price')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="submit" value="Update" class="text-white bg-neutral-900 p-2 mt-6 w-20 rounded">
        </form>
    </div>
@endsection