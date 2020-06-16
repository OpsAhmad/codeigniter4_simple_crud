<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div>
        <h1>Simple CRUD</h1>
    </div>
    <hr>
    <br>
    <a class="btn primary" href="/product/add_new">Add New</a>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $row) : ?>
                <tr>
                    <td><?= $row['product_name']; ?></td>
                    <td><?= $row['product_price']; ?></td>
                    <td><a href="/product/edit/<?= $row['product_id']; ?>" class="btn secondary">Edit</a></td>
                    <td>
                        <a href="/product/delete/<?= $row['product_id']; ?>" class="btn danger" onclick="return confirm('Apa anda yakin ingin menghapus?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>


</html>