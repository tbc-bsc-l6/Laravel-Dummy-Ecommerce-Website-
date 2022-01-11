@extends('layouts.layout')

@section('title')
    Create a product
@endsection

@section('body')
    <div class="max-w-7xl mx-auto flex justify-center">
        <form action="/products" method="post" class="w-1/2 mt-20">
            @csrf

            <div class="w-full text-black text-5xl font-semibold">
                <h1>Create a product</h1>
            </div>

            <input type="hidden" name="image" value="{{ rand(1,9) }}">

            <select name="product" class="w-full mt-6" required>
                <option selected disabled>Select a category</option>
                <option value="Book" @if (old('product') == 'Book') selected @endif>Book</option>
                <option value="Cd" @if (old('product') == 'Cd') selected @endif>CD</option>
                <option value="Game" @if (old('product') == 'Game') selected @endif>Game</option>
            </select>
            @error('product')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror

            <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="w-full mt-6" title="Title" required>
            @error('title')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="text" name="name" placeholder="Author/Artist/Console" value="{{ old('name') }}" class="w-full mt-6" title="Author/Artist/Console" required>
            @error('name')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="text" name="feature" placeholder="Pages/Duration/PEGI" value="{{ old('feature') }}" class="w-full mt-6" title="Pages/Duration/PEGI" required>
            @error('feature')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="number" name="price" placeholder="Price" value="{{ old('price') }}" class="w-full mt-6" title="Price" required>
            @error('price')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
            
            <input type="submit" value="Post" class="text-white bg-neutral-900 p-2 mt-6 w-20 rounded">
            <button class="text-white bg-neutral-900 p-2 mt-6 w-20 rounded"><a href="/products">Cancel</a></button>
        </form>
    </div>
@endsection