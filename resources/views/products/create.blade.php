<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h1>Create Product</h1>
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name" required>
        </div>
        <div>
            <label for="name">Qty</label>
            <input type="text" name="qty" id="qty" placeholder="qty" required>
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" name="price" id="price" placeholder="price" required>
        </div>
        <div>
            <label for="name">Description</label>
            <input type="text" name="description" id="description" placeholder="description" required>
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>

</html>
