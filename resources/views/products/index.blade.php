@extends('products/layout')

@section('title')

@endsection

@section('body')
    <div class="max-w-7xl mx-auto">
        <table class="bg-gray-100 w-full border mt-6 mb-4">
            <tr class="text-center">
                <td class="text-lg font-bold w-60 border">Title</td>
                <td class="text-lg font-bold w-60 border">Name</td>
                <td class="text-lg font-bold w-60 border">Feature</td>
                <td class="text-lg font-bold w-60 border">Price</td>
                <td class="text-lg font-bold w-60 border">Action</td>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td class="p-2 border">{{ $product['title'] }}</td>
                    <td class="p-2 border">{{ $product['name'] }}</td>
                    <td class="p-2 border">{{ $product['feature'] }}</td>
                    <td class="p-2 border">{{ $product['price'] }}</td>
                    <td class="flex sm:justify-center border">
                        <a href="/products/{{ $product['id'] }}/edit">
                            Edit
                        </a> / 
                        <form action="/products/{{ $product['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-red-400 text-white font-bold py-2 px-2 w-20 rounded" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        
        <a href="/products/create" class="text-black text-lg font-bold mt-8 hover:text-gray-400">Add new product</a>
    
        <div class="mt-8">{{ $products->links() }}</div>
    </div>

    
@endsection
