@extends('layouts.layout')

@section('title')
    Single Product
@endsection

@section('body')
    <section class="px-32 pt-14 flex sm:p-5">
        <div class="flex rounded-md bg-neutral-900 w-full product-info-container sm:flex-wrap">
            
            <div class="flex-shrink-0 p-2 sm:image">
                <img src="../../images/{{ $product->image }}.jpg" alt="" class="rounded-md image mm:image sm:image">
            </div>

            <div class="px-8 w-full product-desc">
                <div class="py-6">
                    <h1 class="text-white text-5xl mt-6 font-semibold mm:text-h1">{{ $product->title }}</h1>
                    <p class="text-gray-100 text-md mt-6 mm:text-p">
                        @if ($product->product == "Game")
                            On
                        @else
                            By
                        @endif {{ $product->name }}
                    </p>
                    
                    <h3 class="text-gray-100 text-2xl font-bold mt-10 mm:text-h3">${{ $product->price }}</h3>
                    
                    <p class="mt-6 text-gray-200 mm:text-p">
                        @if ($product->product == "Book")
                            Pages: {{ $product->feature }}
                        @elseif ($product->product == "Cd")
                            Duration: {{ $product->feature }}
                        @else
                            PEGI: {{ $product->feature }}
                        @endif
                    </p>

                    <p class="mt-6 text-gray-200 mm:text-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore modi maxime consequuntur tenetur aspernatur sapiente eos! Porro quas facilis unde repellat possimus aperiam nostrum, fugit eligendi? Est sint esse ipsam?</p>
                    <p class="mt-6 text-gray-200 mm:text-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati deserunt perspiciatis aut quam facilis nulla tempore, omnis provident veniam quibusdam nobis necessitatibus? A perferendis nisi cupiditate. Aliquid corrupti molestias fuga.</p>
                
                    <button class="text-neutral-900 bg-white font-semibold p-2 mt-6 w-20 rounded">Buy now</button>
                </div>
            </div>
        </div>
    </section>
@endsection