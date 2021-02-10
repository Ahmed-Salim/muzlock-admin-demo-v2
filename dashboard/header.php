<?php

session_start();

function urlPrefix()
{
    if (basename(getcwd()) === basename(__DIR__)) {
        return './';
    } elseif (basename(dirname(getcwd())) === basename(__DIR__)) {
        return '../';
    } elseif (basename(dirname(dirname(getcwd()))) === basename(__DIR__)) {
        return '../../';
    } elseif (basename(dirname(dirname(dirname(getcwd())))) === basename(__DIR__)) {
        return '../../../';
    } else {
        return './';
    }
}

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
} else {
    header('Location: ' . urlPrefix() . '../php-scripts/admin-logout.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzlock Admin Dashboard</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo urlPrefix() . 'index.css'; ?>">
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <a href="<?php echo urlPrefix(); ?>" class="brand-logo">Muzlock</a>
                    <ul class="right">
                        <li><a href="<?php echo urlPrefix() . '../php-scripts/admin-logout.php'; ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li><a href="<?php echo urlPrefix(); ?>">Dashboard</a></li>
        <li><a href="<?php echo urlPrefix() . 'users'; ?>">Users</a></li>
    </ul>