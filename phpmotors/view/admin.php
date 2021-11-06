<!DOCTYPE html>
<html lang="en">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/head.php'; ?>
    <title>PHP Motors</title>
</head>

<body>
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        <?php
        //check if the user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<span></span>";
        } else {
            header("Location: /phpmotors/index.php");
        } ?>
    </header>

    <nav>
        <?php //require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; 
        echo $navList; ?>
    </nav>

    <main class="center">
        <?php echo "<h1>logged in " . $_SESSION['clientData']['clientFirstname'] . " " . $_SESSION['clientData']['clientLastname'] . "</h1>"; ?>
        <?php echo "<ul class='adminList'>
                        <li> Firstname: " . $_SESSION['clientData']['clientFirstname'] . "</li>
                        <li> Lastname: " . $_SESSION['clientData']['clientLastname'] . "</li>
                        <li> Email: " . $_SESSION['clientData']['clientEmail'] . "</li>
                    </ul>"; ?>
        <?php
        if ($_SESSION['clientData']['clientLevel'] == 3) {
            echo "<h2>Inventory Management</h2>";
            echo "<p>Use this link to manage the inventory.</p>";
            echo "<span><a href='/phpmotors/vehicles/'>Vehicle Management</a></span>";
        }
        ?>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>