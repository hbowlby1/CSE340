<!DOCTYPE html>
<html lang="en">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/head.php'; ?>

    <title><?php echo $classificationName; ?> vehicles | PHP Motors, Inc.</title>
</head>

<body>
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
    </header>

    <nav>
        <?php //require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; 
        echo $navList; ?>
    </nav>

    <main>
        <h1><?php echo $classificationName; ?> vehicles</h1>

        <?php if (isset($message)) {
            echo $message;
        }
        ?>

        <?php if (isset($vehicleDisplay)) {
            echo $vehicleDisplay;
        } ?>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>