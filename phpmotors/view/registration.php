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
        if (isset($message)) {
            echo $message;
        }
        ?>

        <form method="post" action="/phpmotors/accounts/index.php">
            <form action="/phpmotors/account/index.php" method="post">
                <fieldset>
                    <legend>Enter your information</legend>
                    <label for="firstName"><span>First Name:</span></label>
                    <input placeholder="First Name" type="text" id="firstName" name="clientFirstName" required>

                    <label for="lastName"><span>Last name:</span></label>
                    <input placeholder="Last Name" type="text" id="lastName" name="clientLastname" required>

                    <label for="email"><span>Email:</span></label>
                    <input placeholder="Email" type="email" id="email" name="clientEmail" required>

                    <label for="password"><span>Password: </span></label>
                    <input type="password" id="password" name="clientPassword" placeholder="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    <span class="passwordInfo">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>

                    <input type="submit" name="submit" id="regBtn" class="sign-in" value="Register">
                    <input type="hidden" name="action" value="register">
                </fieldset>
            </form>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/scripts/scripts.php'; ?>
</body>

</html>