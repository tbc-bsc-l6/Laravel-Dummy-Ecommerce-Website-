@extends('layouts.layout')

@section('title')
    Single Product
@endsection

@section('body')
    <section class="px-32 pt-14 flex justify-center">
        <div class="flex rounded-md bg-neutral-900 w-4/5">
            
            <div class="flex-shrink-0 p-2 product-img-size">
                <img src="../../images/{{ $product->image }}.jpg" alt="" class="object-cover h-full rounded-md">
            </div>

            <div class="px-8">
                <div class="pt-6">
                    <h1 class="text-white text-5xl mt-6 font-semibold">{{ $product->title }}</h1>
                    <p class="text-gray-100 text-md mt-6">By {{ $product->name }}</p>
                    
                    <h3 class="text-gray-100 text-2xl font-bold mt-10">${{ $product->price }}</h3>
                    
                    <p class="mt-6 text-gray-200">
                        @if ($product->product == "Book")
                            Pages: {{ $product->feature }}
                        @elseif ($product->product == "Cd")
                            Duration: {{ $product->feature }}
                        @else
                            PEGI: {{ $product->feature }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection