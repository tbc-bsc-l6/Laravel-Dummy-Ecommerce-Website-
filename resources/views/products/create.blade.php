<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="/product" method="post">
        @csrf
        <select name="product">
            <option value="Book">Book</option>
            <option value="Cd">CD</option>
            <option value="Game">Game</option>
        </select><br><br>
        <input type="text" name="title" placeholder="Title"><br><br>
        <input type="text" name="name" placeholder="Author/Artist/Console"><br><br>
        <input type="text" name="feature" placeholder="Pages/Duration/PEGI"><br><br>
        <input type="number" name="price" placeholder="Price"><br><br>
        <input type="submit" value="Post">
    </form>
</body>
</html>