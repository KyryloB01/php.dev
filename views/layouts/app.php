<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My App' ?></title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a> |
            <a href="/about">About</a> |
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        {{ content }}
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> My App</p>
    </footer>
</body>
</html>
