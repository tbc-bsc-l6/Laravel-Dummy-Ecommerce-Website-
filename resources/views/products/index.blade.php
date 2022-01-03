<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
</head>
<body class="bg-blue-100">
    <table border="1">
        <tr>
            <td>Title</td>
            <td>Name</td>
            <td>Feature</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['title'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['feature'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>
                    <a href="/products/{{ $product['id'] }}/edit">
                        Edit
                    </a> / 
                    <form action="/products/{{ $product['id'] }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="products/create">Add new product</a>
</body>
</html>