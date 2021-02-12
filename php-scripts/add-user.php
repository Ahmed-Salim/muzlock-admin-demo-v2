<?php

session_start();

include_once './db-config.php';
include_once './common-functions.php';

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    if (empty($_POST["user_img"]) || empty($_POST["user_name"]) || empty($_POST["user_email"]) || empty($_POST["user_pass"])) {
        echo 'Error: Required Fields Empty!';

        header("Refresh:3; url=../dashboard/users/add");
        die();
    } else {
        $user_img = mysqli_real_escape_string($conn, clean_input($_POST["user_img"]));
        $user_name = mysqli_real_escape_string($conn, clean_input($_POST["user_name"]));
        $user_email = mysqli_real_escape_string($conn, clean_input($_POST["user_email"]));
        $user_pass = mysqli_real_escape_string($conn, clean_input($_POST["user_pass"]));
        $user_age = mysqli_real_escape_string($conn, clean_input($_POST["user_age"]));
        $user_country = mysqli_real_escape_string($conn, clean_input($_POST["user_country"]));
        $user_sect = mysqli_real_escape_string($conn, clean_input($_POST["user_sect"]));
        $user_revert = mysqli_real_escape_string($conn, clean_input($_POST["user_revert"]));
        $user_religion = mysqli_real_escape_string($conn, clean_input($_POST["user_religion"]));
        $user_phone = mysqli_real_escape_string($conn, clean_input($_POST["user_phone"]));
        $user_gender = mysqli_real_escape_string($conn, clean_input($_POST["user_gender"]));
        $user_dob = mysqli_real_escape_string($conn, clean_input($_POST["user_dob"]));
        $user_lang = mysqli_real_escape_string($conn, clean_input($_POST["user_lang"]));
        $user_origin = mysqli_real_escape_string($conn, clean_input($_POST["user_origin"]));
        $user_smoke = mysqli_real_escape_string($conn, clean_input($_POST["user_smoke"]));
        $user_jobTitle = mysqli_real_escape_string($conn, clean_input($_POST["user_jobTitle"]));

        $sql = "SELECT * FROM user WHERE user_email = '$user_email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo 'Error: Email ' . $user_email . ' is Already Registered!';

                header("Refresh:3; url=../dashboard/users/add");
                die();
            }
        } else {
            $sql2 = "INSERT INTO user (user_img, user_name, user_email, user_pass, user_age, user_country, user_sect, user_revert, user_religion, user_phone, user_gender, user_dob, user_lang, user_origin, user_smoke, user_jobTitle) VALUES ('$user_img', '$user_name', '$user_email', '$user_pass', $user_age, '$user_country', '$user_sect', '$user_revert', '$user_religion', '$user_phone', '$user_gender', '$user_dob', '$user_lang', '$user_origin', '$user_smoke', '$user_jobTitle')";

            if (mysqli_query($conn, $sql2)) {
                echo "Success: New User Created Successfully!";

                header("Refresh:3; url=../dashboard/users/user/?user_id=" . mysqli_insert_id($conn));
                die();
            } else {
                echo "Error: " . mysqli_error($conn);

                header("Refresh:3; url=../dashboard/users/add");
                die();
            }
        }
    }
} else {
    echo 'Error: Please Login Again to Continue!';

    header("Refresh:3; url=./admin-logout.php");
    die();
}

mysqli_close($conn);
