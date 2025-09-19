<h1><?= $title ?></h1>
<a href="/categories/create">+ Add Category</a>
<table border="1">
    <tr>
        <th>ID</th><th>Name</th><th>Image</th><th>Actions</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td><?= $category['image'] ?></td>
            <td>
                <a href="/categories/edit?id=<?= $category['id'] ?>">Edit</a>
                <form action="/categories/destroy?id=<?= $category['id'] ?>" method="POST" style="display:inline">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
