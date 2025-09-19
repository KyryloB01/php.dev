<h1><?= $title ?></h1>
<form method="POST" action="/badges/update?id=<?= $badge['id'] ?>">
    <input type="text" name="title" value="<?= $badge['title'] ?>" required>
    <button type="submit">Update</button>
</form>
