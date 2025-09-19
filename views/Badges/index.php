<h1><?= $title ?></h1>
<a href="/badges/create">+ Add Badge</a>
<table border="1">
    <tr>
        <th>ID</th><th>Title</th><th>Actions</th>
    </tr>
    <?php foreach ($badges as $badge): ?>
        <tr>
            <td><?= $badge['id'] ?></td>
            <td><?= $badge['title'] ?></td>
            <td>
                <a href="/badges/edit?id=<?= $badge['id'] ?>">Edit</a>
                <form action="/badges/destroy?id=<?= $badge['id'] ?>" method="POST" style="display:inline">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
