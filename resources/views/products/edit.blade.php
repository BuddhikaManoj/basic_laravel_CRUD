<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form method="post" action="{{ route('products.update', ['product' => $product]) }}">
        @method('put')
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name" value="{{ $product->name }}">
        </div>
        <div>
            <label for="name">Qty</label>
            <input type="text" name="qty" id="qty" placeholder="qty" value="{{ $product->qty }}">
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" name="price" id="price" placeholder="price" value="{{ $product->price }}">
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" name="description" id="description" placeholder="description"
                value="{{ $product->description }}">
        </div>
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>

</html>
