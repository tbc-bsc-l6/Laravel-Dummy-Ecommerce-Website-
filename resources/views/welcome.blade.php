@extends('layouts.layout')

@section('title')
    Welcome
@endsection

@section('body')
    <section>
        <div class="flex sm:flex-wrap p-20 md:p-10">
            <img src="../../images/books.jpg" width="800px" class="object-contain md:image sm:image">
            <div class="p-20 sm:bg-gray-200 sm:p-5 sm:width">
                <h1 class="font-semibold text-neutral-900 text-6xl md:text-h1">A collection of handpicked books</h1>
                <p class="text-lg md:text-p mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="/all-products?category=Book"><button class="bg-neutral-900 text-white md:text-p p-2 mt-6">Shop Books</button></a>
            </div>
        </div>

        <div class="flex sm:flex-reverse sm:flex-wrap p-20 md:p-10">
            <div class="p-20 sm:bg-gray-200 sm:p-5 sm:width">
                <h1 class="font-semibold text-neutral-900 text-6xl md:text-h1">A collection of handpicked books</h1>
                <p class="text-lg md:text-p mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="/all-products?category=Cd"><button class="bg-neutral-900 text-white md:text-p p-2 mt-6">Shop Cds</button></a>
            </div>
            <img src="../../images/cds.jpg" width="800px" class="object-contain md:image sm:image">
        </div>

        <div class="flex sm:flex-wrap p-20 md:p-10">
            <img src="../../images/games.jpg" width="800px" class="object-contain md:image sm:image">
            <div class="p-20 sm:bg-gray-200 sm:p-5 sm:width">
                <h1 class="font-semibold text-neutral-900 text-6xl md:text-h1">A collection of handpicked books</h1>
                <p class="text-lg md:text-p mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="/all-products?category=Game"><button class="bg-neutral-900 text-white md:text-p p-2 mt-6">Shop Games</button></a>
            </div>
        </div>
    </section>
@endsection