<!DOCTYPE html>
<html lang="en">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/head.php'; ?>

    <title>PHP Motors</title>
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
        <h1 class="center">Vehicle Details</h1>
        <section class="main">


            <?php
            if (!empty($vehicleDetailsDisplay)) {
                echo $vehicleDetailsDisplay;
            }
            if (isset($thumbnailsList)) {
                echo $thumbnailsList;
            }
            ?>

        </section>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>