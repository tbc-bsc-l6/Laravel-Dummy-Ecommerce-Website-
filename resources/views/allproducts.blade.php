@extends('layouts.homelayout')

@section('body')
    <div class="w-full px-20 mt-8 text-black text-5xl font-semibold">
        <h1>All products</h1>
    </div>

    <div class="container gap-16 mx-20 my-8">
        @foreach ($allproducts as $product)
            <a href="/products/{{ $product->id }}">
                <div class="overflow-hidden shadow-lg shadow-gray-700">
                    <img src="../../images/{{ $product->image }}.jpg" alt="" class="w-full h-96 object-cover">
                    <div class="bg-neutral-900 p-2 text-center">
                        <p class=" text-white font-semibold text-lg">{{ $product->title }}</p>
                        <p class=" text-white text-sm">By {{ $product->name }}</p>
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