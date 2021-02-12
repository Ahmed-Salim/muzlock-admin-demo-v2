<?php

session_start();

include_once './db-config.php';
include_once './common-functions.php';

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    if (empty($_POST["user_id"]) || empty($_POST["user_img"]) || empty($_POST["user_name"]) || empty($_POST["user_email"]) || empty($_POST["user_pass"])) {
        echo 'Error! Update Failed: Required Fields Empty!';

        header("Refresh:3; url=../dashboard/users");
        die();
    } else {
        $user_id = mysqli_real_escape_string($conn, clean_input($_POST["user_id"]));
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

        $sql = "SELECT * FROM user WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($user_email === $row['user_email']) {
                    $sql2 = "UPDATE user SET user_email = '$user_email', user_pass = '$user_pass', user_img = '$user_img', user_name = '$user_name', user_age = '$user_age', user_country = '$user_country', user_sect = '$user_sect', user_revert = '$user_revert', user_religion = '$user_religion', user_phone = '$user_phone', user_gender = '$user_gender', user_dob = '$user_dob', user_lang = '$user_lang', user_origin = '$user_origin', user_smoke = '$user_smoke', user_jobTitle = '$user_jobTitle' WHERE id = $user_id";

                    if (mysqli_query($conn, $sql2)) {
                        echo 'User: "' . $user_name . '" Updated Successfully!';

                        header("Refresh:3; url=../dashboard/users/user/?user_id=" . $user_id);
                        die();
                    } else {
                        echo "Error! Update Failed: " . mysqli_error($conn);

                        header("Refresh:3; url=../dashboard/users/user/?user_id=" . $user_id);
                        die();
                    }
                } else {
                    $sql3 = "SELECT * FROM user WHERE user_email = '$user_email'";
                    $result3 = mysqli_query($conn, $sql3);

                    if (mysqli_num_rows($result3) > 0) {
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            echo 'Error! Update Failed: Email ' . $user_email . ' is Already Registered!';

                            header("Refresh:3; url=../dashboard/users/user/?user_id=" . $user_id);
                            die();
                        }
                    } else {
                        $sql2 = "UPDATE user SET user_email = '$user_email', user_pass = '$user_pass', user_img = '$user_img', user_name = '$user_name', user_age = '$user_age', user_country = '$user_country', user_sect = '$user_sect', user_revert = '$user_revert', user_religion = '$user_religion', user_phone = '$user_phone', user_gender = '$user_gender', user_dob = '$user_dob', user_lang = '$user_lang', user_origin = '$user_origin', user_smoke = '$user_smoke', user_jobTitle = '$user_jobTitle' WHERE id = $user_id";

                        if (mysqli_query($conn, $sql2)) {
                            echo 'User: "' . $user_name . '" Updated Successfully!';

                            header("Refresh:3; url=../dashboard/users/user/?user_id=" . $user_id);
                            die();
                        } else {
                            echo "Error! Update Failed: " . mysqli_error($conn);

                            header("Refresh:3; url=../dashboard/users/user/?user_id=" . $user_id);
                            die();
                        }
                    }
                }
            }
        } else {
            echo 'Error! Update Failed: Invalid User ID!';

            header("Refresh:3; url=../dashboard/users");
            die();
        }
    }
} else {
    echo 'Please Login Again to Continue!';

    header("Refresh:3; url=./admin-logout.php");
    die();
}

mysqli_close($conn);
