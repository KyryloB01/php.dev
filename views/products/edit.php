<h1><?= $title ?></h1>
<form method="POST" action="/products/update?id=<?= $product['id'] ?>" enctype="multipart/form-data">
    <input type="text" name="name" value="<?= $product['name'] ?>" required>
    <?php if ($product['image']): ?>
        <img src="/uploads/<?= $product['image'] ?>" width="100"><br>
    <?php endif; ?>
    <input type="hidden" name="old_image" value="<?= $product['image'] ?>">
    <input type="file" name="image">
    <button type="submit">Update</button>
</form>
