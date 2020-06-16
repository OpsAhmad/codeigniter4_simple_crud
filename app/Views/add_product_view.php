<!DOCTYPE html>
<html lang="en">

<head>
        
    <meta charset="UTF-8">
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add New Product</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div>
        <h1>ADD DATA</h1>
    </div>
    <div class="center">
        <form action="/product/save" method="post">
                    <input type="text" name="product_name" placeholder="Product Name" required>
            <br>
                    <input type="text" name="product_price" placeholder="Product Price" required>
            <br>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</body>

</html>