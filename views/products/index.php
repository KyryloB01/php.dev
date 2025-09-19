<h1><?= $title ?></h1>
<a href="/products/create">+ Add Product</a>
<table border="1">
    <tr>
        <th>ID</th><th>Name</th><th>Image</th><th>Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td>
                <?php if ($product['image']): ?>
                    <img src="/uploads/<?= $product['image'] ?>" width="80">
                <?php endif; ?>
            </td>
            <td>
                <a href="/products/edit?id=<?= $product['id'] ?>">Edit</a>
                <form action="/products/destroy?id=<?= $product['id'] ?>" method="POST" style="display:inline">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
