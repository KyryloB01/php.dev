<h1><?= $title ?></h1>
<form method="POST" action="/products/store" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product name" required>
    <input type="file" name="image">
    <button type="submit">Save</button>
</form>
