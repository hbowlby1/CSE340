<?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/module/header.php'; ?>
            <nav>
                <?php echo $navList; ?>
            </nav>
            <main>
                <div class="main_content">
                    <h1>Sign in</h1>
                    <?php
                    if (isset($message)) {
                    echo $message;
                    }
                    ?>
                    <form action="/phpmotors/accounts/index.php" method="post">
                        <label for="clientEmail">Email</label><br>
                        <input name="clientEmail" id="clientEmail" type="email"><br>

                        <label for="clientPassword">Password</label><br>
                        <input name="clientPassword" id="clientPassword" type="password"><br>

                        <input type="submit" value="LOGIN" id="btn">
                    </form>
                    <p>No account? <a href="/phpmotors/accounts/?action=registration">Sign-up</a></p>
                </div>
            </main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/module/footer.php'; ?> 