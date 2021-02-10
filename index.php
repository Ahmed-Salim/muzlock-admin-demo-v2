<?php

session_start();

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    header("Location: ./dashboard");
    die();
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzlock Admin Demo V2</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align">Muzlock Admin Demo V2</h1>
            </div>
        </div>
        <div class="row">
            <form method="POST" action="./php-scripts/admin-login.php" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" required autofocus>
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Test Email: admin@example.com" data-success="Test Email: admin@example.com">Test Email: admin@example.com</span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" name="password" class="validate" required>
                        <label for="password">Password</label>
                        <span class="helper-text" data-error="Test Password: admin123" data-success="Test Password: admin123">Test Password: admin123</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn waves-effect waves-light" type="submit">
                            Login
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>