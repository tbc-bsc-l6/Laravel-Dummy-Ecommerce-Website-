<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
</head>
<body>
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
                <td>Delete</td>
            </tr>
        @endforeach
    </table>
</body>
</html>