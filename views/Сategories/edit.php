<h1><?= $title ?></h1>
<form method="POST" action="/categories/update?id=<?= $category['id'] ?>">
    <input type="text" name="name" value="<?= $category['name'] ?>" required>
    <input type="text" name="image" value="<?= $category['image'] ?>" required>
    <button type="submit">Update</button>
</form>
