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
        <div>
            <h1 class="center">Add Car Classification</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/vehicles/index.php" method="post">
                <label for="classificationName">Give a Classification Name</label><br>
                <input <?php if (isset($classificationName)) {
                            echo "value='$classificationName'";
                        } ?>name="classificationName" id="classificationName" type="text" maxlength="30">
                <p class="center">Please keep the classification under 30 characters.</p>
                <br>

                <input type="submit" value="Add Classification" id="btn">
                <input type="hidden" name="action" value="adding-classification">
            </form>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>