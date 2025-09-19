<h1><?= $title ?></h1>
<form method="POST" action="/badges/store">
    <input type="text" name="title" placeholder="Badge title" required>
    <button type="submit">Save</button>
</form>
