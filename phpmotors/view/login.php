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
        <?php
            if (isset($message)){
                echo $message;
            }
        ?>
        <form action="#" method="get">
            <fieldset>
            <legend>Enter your Information</legend>
                
            <label for="email" class="test"><span>Email:</span></label>
            <input placeholder ="Email" type="email" id="email" name="clientEmail" required>
            <label for="password" class="test"><span>Password:</span></label>
            <input placeholder ="Password" type="password" id="password" name="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
            <span class="passwordInfo">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
            <input type="submit" value="sign-in" class="sign-in">
            <input type="hidden" name="action" value=Login>
            </fieldset>
        </form>

        <p>Don't have an account <a href="/phpmotors/accounts/index.php/?action=register" title="CREATE ACCOUNT" class="accountCreate">Click Here</a></p>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>