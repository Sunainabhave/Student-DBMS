<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="black.jpg">
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Form.
            <h4>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];


                ?>
            </h4>

            </center>
            <form action="login_check.php" method="POST" login_form">
                <div>
                    <label class="label_deg" for="username">Username:</label>
                    <input class="in" type="text" id="username" name="username">
                </div>
                <div>
                    <label class="label_deg" for="password">Password:</label>
                    <input class="in" type="password" id="password" name="password">
                </div>
                <div>
                    <input class="butt" type="submit" name="submit" value="Login!">
                </div>
            </form>
        </div>
    </center>
</body>
</html>