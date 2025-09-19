<h1><?= $title ?></h1>
<form method="POST" action="/categories/store">
    <input type="text" name="name" placeholder="Category name" required>
    <input type="text" name="image" placeholder="Image filename" required>
    <button type="submit">Save</button>
</form>
