@extends('products/layout')

@section('title')
    Index
@endsection

@section('body')
    <div class="max-w-7xl mx-auto">
        <table class="bg-gray-100 w-full border mt-20 mb-4">
            <tr class="text-center text-lg h-10">
                <td class="font-bold w-60 border">Title</td>
                <td class="font-bold w-60 border">Name</td>
                <td class="font-bold w-60 border">Feature</td>
                <td class="font-bold w-60 border">Price</td>
                <td class="font-bold w-60 border">Type</td>
                <td class="font-bold w-60 border">Actions</td>
            </tr>
            @foreach ($products as $product)
                <tr class="border">
                    <td class="p-2 border-r">{{ $product['title'] }}</td>
                    <td class="p-2 border-r">{{ $product['name'] }}</td>
                    <td class="p-2 border-r">{{ $product['feature'] }}</td>
                    <td class="p-2 border-r">{{ $product['price'] }}</td>
                    <td class="p-2 border-r">{{ $product['product'] }}</td>
                    <td class="flex justify-center pt-2">
                        <a href="/products/{{ $product['id'] }}/edit">
                            <span class="material-icons edit md-24 mr-2 ml-2">
                                edit
                            </span>
                        </a>
                        <form action="/products/{{ $product['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">
                                <span class="material-icons delete md-24 mr-2 ml-2">
                                    delete
                                </span>
                            </button>
                        </form>
                        <a href="/products/{{ $product->id }}">
                            <span class="material-icons md-24 mr-2 ml-2">
                                open_in_new
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

        
        <a href="/products/create" class="text-black text-lg font-bold mt-8 hover:text-indigo-600">Add new product</a>
    
        <div class="mt-8">{{ $products->links() }}</div>
    </div>

    
@endsection
