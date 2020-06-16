<!DOCTYPE html>
<html lang="en">

<head>
        
    <meta charset="UTF-8">
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Product</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div>
        <h1>Edit DATA</h1>
    </div>
    <div class="center">
        <form action="/product/update" method="post">
            <input type="text" name="product_name" value="<?= $product->product_name; ?>">
            <br>
            <input type="text" name="product_price" value="<?= $product->product_price; ?>">
            <br>
            <input type="hidden" name="product_id" value="<?= $product->product_id; ?>">
            <br>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>

</html>