<h1>Tags</h1>
<a href="/tags/create">Add new tag</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
    </tr>
    <?php foreach ($tags as $tag): ?>
        <tr>
            <td><?= $tag['id'] ?></td>
            <td><?= $tag['name'] ?></td>
            <td><?= $tag['slug'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
