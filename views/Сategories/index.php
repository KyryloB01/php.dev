<h1>Categories</h1>
<a href="/categories/create">Add new category</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td><?= $category['image'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
