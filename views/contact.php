<h1><?= $title ?></h1>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Message</th>
    </tr>
    <?php foreach ($result as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['message'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
