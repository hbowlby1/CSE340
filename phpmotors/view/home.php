<!DOCTYPE html>
<html lang="en">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/head.php'; ?>
    <title>PHP Motors</title>
</head>

<body>
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        <?php if (isset($cookieFirstName)) {
            echo "<span class='welcome'>Welcome $cookieFirstName</span>";
        } ?>
    </header>

    <nav>
        <?php echo $navList; ?>
    </nav>

    <main>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/main.php'; ?>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>