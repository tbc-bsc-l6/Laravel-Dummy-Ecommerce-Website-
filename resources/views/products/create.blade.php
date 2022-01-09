@extends('layouts.layout')

@section('title')
    Create page
@endsection

@section('body')
    <div class="max-w-7xl mx-auto flex justify-center">
        <form action="/products" method="post" class="w-1/2 mt-20">
            @csrf

            <div class="w-full text-black text-5xl font-semibold">
                <h1>Create product</h1>
            </div>

            <input type="hidden" name="image" value="{{ rand(1,9) }}">

            <select name="product" class="w-full mt-6" required>
                <option value="Book">Book</option>
                <option value="Cd">CD</option>
                <option value="Game">Game</option>
            </select><br><br>
            <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="w-full" required><br><br>
            @error('title')
                <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
            <input type="text" name="name" placeholder="Author/Artist/Console" value="{{ old('name') }}" class="w-full" required><br><br>
            @error('name')
                <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
            <input type="text" name="feature" placeholder="Pages/Duration/PEGI" value="{{ old('feature') }}" class="w-full" required><br><br>
            @error('feature')
                <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
            <input type="number" name="price" placeholder="Price" value="{{ old('price') }}" class="w-full" required><br><br>
            @error('price')
                <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
            <input type="submit" value="Post" class="text-white bg-neutral-900 p-2 w-20 rounded">
        </form>
    </div>
@endsection