<h1>Badges</h1>
<a href="/badges/create">Add new badge</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Title</th>
    </tr>
    <?php foreach ($badges as $badge): ?>
        <tr>
            <td><?= $badge['id'] ?></td>
            <td><?= $badge['title'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
