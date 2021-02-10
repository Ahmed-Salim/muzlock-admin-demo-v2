<?php

session_start();

include_once './db-config.php';
include_once './common-functions.php';

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    header("Location: ../dashboard");
    die();
} else {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo 'Email or Password Empty!<br />Try Logging in Again!';

        header("refresh:3; url=../");
        die();
    } else {
        $email = mysqli_real_escape_string($conn, clean_input($_POST["email"]));
        $admin_password = mysqli_real_escape_string($conn, clean_input($_POST["password"]));

        $sql = "SELECT * FROM admin WHERE admin_email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($admin_password, $row['admin_password'])) {
                    $_SESSION['admin_id'] = $row['admin_id'];

                    header("Location: ../dashboard");
                    die();
                } else {
                    echo 'Invalid Email or Password<br />Try Logging in Again!';

                    header("refresh:3; url=../");
                    die();
                }
            }
        } else {
            echo 'Invalid Email or Password<br />Try Logging in Again!';

            header("refresh:3; url=../");
            die();
        }
    }
}
