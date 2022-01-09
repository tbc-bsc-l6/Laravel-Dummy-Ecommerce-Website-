@extends('layouts.layout')

@section('body')
    <div class="flex justify-between w-full px-20 mt-8 text-black text-5xl font-semibold">
        <h1>
            <a href="/all-products">All products</a> 
            @if (request('category') ?? false)
                @if (request('category') == "Book")
                    / Books
                @elseif (request('category') == "Cd")
                    / Cds
                @else
                    / Games
                @endif
            @endif
        </h1>
        <form action="" method="get">
            <select name="category" id="" onchange="this.form.submit()">
                <option selected disabled="disabled">Select a category</option>
                <option value="Book" @if (request('category') == "Book") selected @endif>Books</option>
                <option value="Cd" @if (request('category') == "Cd") selected @endif>Cds</option>
                <option value="Game" @if (request('category') == "Game") selected @endif>Games</option>
            </select>
        </form>
    </div>

    <div class="container gap-16 mx-20 my-8">
        @foreach ($allproducts as $product)
            <a href="/products/{{ $product->id }}">
                <div class="overflow-hidden shadow-lg shadow-gray-700">
                    <img src="../../images/{{ $product->image }}.jpg" alt="" class="w-full h-96 object-cover">
                    <div class="bg-neutral-900 p-2 text-center">
                        <p class=" text-white font-semibold text-lg">{{ $product->title }}</p>
                        <p class=" text-white text-sm">
                            @if ($product->product == "Game")
                                On
                            @else
                                By
                            @endif {{ $product->name }}
                        </p>
                        <p class=" text-white text-sm">${{ $product->price }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="px-20 pb-3 mb-4">
        {{ $allproducts->links() }}
    </div>
@endsection