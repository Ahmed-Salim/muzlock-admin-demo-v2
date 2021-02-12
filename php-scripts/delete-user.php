<?php

session_start();

include_once './db-config.php';
include_once './common-functions.php';

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    $user_id = mysqli_real_escape_string($conn, clean_input($_GET['user_id']));

    $sql1 = "SELECT * FROM user WHERE id = $user_id";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $user_name = $row1['user_name'];

            $sql = "DELETE FROM user WHERE id = $user_id";

            if (mysqli_query($conn, $sql)) {
                echo "Success: User " . $user_name . " Deleted Successfully!<br />";

                $sql2 = "DELETE FROM blocked WHERE block_by = $user_id";

                if (mysqli_query($conn, $sql2)) {
                    echo "Success: User Blocked Data Deleted Successfully<br />";
                } else {
                    echo "Error: " . mysqli_error($conn) . '<br />';
                }

                $sql3 = "DELETE FROM favourite WHERE fav_by = $user_id";

                if (mysqli_query($conn, $sql3)) {
                    echo "Success: User Favourite Data Deleted Successfully<br />";
                } else {
                    echo "Error: " . mysqli_error($conn) . '<br />';
                }

                $sql4 = "DELETE FROM liked WHERE like_by = $user_id";

                if (mysqli_query($conn, $sql4)) {
                    echo "Success: User Liked Data Deleted Successfully<br />";
                } else {
                    echo "Error: " . mysqli_error($conn) . '<br />';
                }

                $sql5 = "DELETE FROM unliked WHERE unlike_by = $user_id";

                if (mysqli_query($conn, $sql5)) {
                    echo "Success: User Unliked Data Deleted Successfully<br />";
                } else {
                    echo "Error: " . mysqli_error($conn) . '<br />';
                }

                $sql6 = "DELETE FROM user_inform WHERE user_id = $user_id";

                if (mysqli_query($conn, $sql6)) {
                    echo "Success: User Inform Data Deleted Successfully<br />";
                } else {
                    echo "Error: " . mysqli_error($conn) . '<br />';
                }

                header("Refresh:3; url=../dashboard/users");
                die();
            } else {
                echo "Error deleting profile: " . mysqli_error($conn);

                header("Refresh:3; url=../dashboard/users/user/?used_id=" . $user_id);
                die();
            }
        }
    } else {
        echo "Error: Invalid User ID";

        header("Refresh:3; url=../dashboard/users");
        die();
    }
} else {
    echo 'Please Login Again to Continue!';

    header("Refresh:3; url=./admin-logout.php");
    die();
}

mysqli_close($conn);
