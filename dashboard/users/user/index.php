<?php include_once '../../header.php'; ?>
<?php

if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
    include_once('../../../php-scripts/db-config.php');
    include_once('../../../php-scripts/common-functions.php');

    $user_id = mysqli_real_escape_string($conn, clean_input($_GET["user_id"]));
} else {
    header('Location: ../');
    die();
}

?>

<link rel="stylesheet" href="./index.css">

<main>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <div class="col s12">
                    <a href="../../" class="breadcrumb">Dashboard</a>
                    <a href="../" class="breadcrumb">Muzlock Users</a>
                    <a href="<?php echo './?user_id=' . $user_id; ?>" class="breadcrumb">User <?php echo $user_id; ?></a>
                </div>
            </div>
        </div>
    </nav>
    <h1 class="center-align">User Details</h1>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="tabs-nav col s12">
                    <ul class="tabs tabs-fixed-width z-depth-1">
                        <li class="tab col s3"><a href="#profile">Profile</a></li>
                        <li class="tab col s3"><a href="#liked">Liked</a></li>
                        <li class="tab col s3"><a href="#unliked">Unliked</a></li>
                        <li class="tab col s3"><a href="#favourite">Favourite</a></li>
                        <li class="tab col s3"><a href="#blocked">Blocked</a></li>
                    </ul>
                </div>
                <div id="profile" class="col s12">

                    <?php

                    $user_name = '';

                    $sql = "SELECT * FROM user WHERE id = $user_id";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $user_name = $row['user_name'];

                    ?>

                            <h4 class="center-align"><?php echo ucwords($user_name) . "'s Profile"; ?></h4>

                            <form action="../../../php-scripts/update-user-profile.php" method="POST">
                                <input name="user_id" type="hidden" value="<?php echo $row['id']; ?>" required>
                                <div class="row">
                                    <div class="col s12 text-center">
                                        <img class="materialboxed" height="200px" src="<?php echo $row['user_img']; ?>" alt="<?php echo $row['user_name']; ?>">
                                        <div class="input-field">
                                            <input id="user_img" name="user_img" type="text" class="validate" value="<?php echo $row['user_img']; ?>" required>
                                            <label for="user_img" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_name" name="user_name" type="text" class="validate" value="<?php echo $row['user_name']; ?>" required>
                                        <label for="user_name" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Name</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_email" name="user_email" type="email" class="validate" value="<?php echo $row['user_email']; ?>" required>
                                        <label for="user_email" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Email</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_pass" name="user_pass" type="text" class="validate" value="<?php echo $row['user_pass']; ?>" required>
                                        <label for="user_pass" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Password</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_age" name="user_age" type="number" class="validate" value="<?php echo $row['user_age']; ?>">
                                        <label for="user_age">User Age</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_country" name="user_country" type="text" class="validate" value="<?php echo $row['user_country']; ?>">
                                        <label for="user_country">User Country</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_sect" name="user_sect" type="text" class="validate" value="<?php echo $row['user_sect']; ?>">
                                        <label for="user_sect">User Sect</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_revert" name="user_revert" type="text" class="validate" value="<?php echo $row['user_revert']; ?>">
                                        <label for="user_revert">User Revert</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_religion" name="user_religion" type="text" class="validate" value="<?php echo $row['user_religion']; ?>">
                                        <label for="user_religion">User Religion</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_phone" name="user_phone" type="text" class="validate" value="<?php echo $row['user_phone']; ?>">
                                        <label for="user_phone">User Phone</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_gender" name="user_gender" type="text" class="validate" value="<?php echo $row['user_gender']; ?>">
                                        <label for="user_gender">User Gender</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_dob" name="user_dob" type="date" class="validate" value="<?php echo $row['user_dob']; ?>">
                                        <label for="user_dob">User Date of Birth</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_lang" name="user_lang" type="text" class="validate" value="<?php echo $row['user_lang']; ?>">
                                        <label for="user_lang">User Language</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_origin" name="user_origin" type="text" class="validate" value="<?php echo $row['user_origin']; ?>">
                                        <label for="user_origin">User Origin</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_smoke" name="user_smoke" type="text" class="validate" value="<?php echo $row['user_smoke']; ?>">
                                        <label for="user_smoke">User Smoke</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6 xl4">
                                        <input id="user_jobTitle" name="user_jobTitle" type="text" class="validate" value="<?php echo $row['user_jobTitle']; ?>">
                                        <label for="user_jobTitle">User Job Title</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 center-align">
                                        <button class="btn btn-large" type="submit" name="update-profile">
                                            Update
                                            <i class="material-icons right">update</i>
                                        </button>
                                    </div>
                                    <div class="col s6 center-align">
                                        <button class="btn btn-large red" type="button" name="delete-user">
                                            Delete
                                            <i class="material-icons right">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                    <?php

                        }
                    } else {
                        header('Location: ../');
                        die();
                    }

                    ?>

                </div>

                <div id="liked" class="col s12">
                    <h4 class="center-align"><?php echo ucwords($user_name) . "'s Liked Users"; ?></h4>

                    <table class="highlight centered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Image</th>
                                <th>User Name</th>
                                <th>User Email</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            $sql2 = "SELECT * FROM liked INNER JOIN user ON user.id = liked.user_like WHERE liked.like_by = $user_id ORDER BY user.user_name ASC";
                            $result2 = mysqli_query($conn, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                $count = 1;

                                while ($row2 = mysqli_fetch_assoc($result2)) {

                            ?>

                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><img class="materialboxed" src="<?php echo $row2['user_img']; ?>" alt="<?php echo $row['user_name']; ?>" height="100px" /></td>
                                        <td><a class="btn" href="./?user_id=<?php echo $row2['id']; ?>"><?php echo $row2['user_name']; ?></a></td>
                                        <td><?php echo $row2['user_email']; ?></td>
                                    </tr>

                            <?php

                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='4' class='center-align red-text'>No Liked Users</td></tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

                <div id="unliked" class="col s12">
                    <h4 class="center-align"><?php echo ucwords($user_name) . "'s Unliked Users"; ?></h4>

                    <table class="highlight centered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Image</th>
                                <th>User Name</th>
                                <th>User Email</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            $sql2 = "SELECT * FROM unliked INNER JOIN user ON user.id = unliked.user_unlike WHERE unliked.unlike_by = $user_id ORDER BY user.user_name ASC";
                            $result2 = mysqli_query($conn, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                $count = 1;

                                while ($row2 = mysqli_fetch_assoc($result2)) {

                            ?>

                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><img class="materialboxed" src="<?php echo $row2['user_img']; ?>" alt="<?php echo $row['user_name']; ?>" height="100px" /></td>
                                        <td><a class="btn" href="./?user_id=<?php echo $row2['id']; ?>"><?php echo $row2['user_name']; ?></a></td>
                                        <td><?php echo $row2['user_email']; ?></td>
                                    </tr>

                            <?php

                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='4' class='center-align red-text'>No Unliked Users</td></tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

                <div id="favourite" class="col s12">
                    <h4 class="center-align"><?php echo ucwords($user_name) . "'s Favourite Users"; ?></h4>

                    <table class="highlight centered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Image</th>
                                <th>User Name</th>
                                <th>User Email</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            $sql2 = "SELECT * FROM favourite INNER JOIN user ON user.id = favourite.user_fav WHERE favourite.fav_by = $user_id ORDER BY user.user_name ASC";
                            $result2 = mysqli_query($conn, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                $count = 1;

                                while ($row2 = mysqli_fetch_assoc($result2)) {

                            ?>

                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><img class="materialboxed" src="<?php echo $row2['user_img']; ?>" alt="<?php echo $row['user_name']; ?>" height="100px" /></td>
                                        <td><a class="btn" href="./?user_id=<?php echo $row2['id']; ?>"><?php echo $row2['user_name']; ?></a></td>
                                        <td><?php echo $row2['user_email']; ?></td>
                                    </tr>

                            <?php

                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='4' class='center-align red-text'>No Favourite Users</td></tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

                <div id="blocked" class="col s12">
                    <h4 class="center-align"><?php echo ucwords($user_name) . "'s Blocked Users"; ?></h4>

                    <table class="highlight centered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Image</th>
                                <th>User Name</th>
                                <th>User Email</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            $sql2 = "SELECT * FROM blocked INNER JOIN user ON user.id = blocked.user_blocked WHERE blocked.block_by = $user_id ORDER BY user.user_name ASC";
                            $result2 = mysqli_query($conn, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                $count = 1;

                                while ($row2 = mysqli_fetch_assoc($result2)) {

                            ?>

                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><img class="materialboxed" src="<?php echo $row2['user_img']; ?>" alt="<?php echo $row['user_name']; ?>" height="100px" /></td>
                                        <td><a class="btn" href="./?user_id=<?php echo $row2['id']; ?>"><?php echo $row2['user_name']; ?></a></td>
                                        <td><?php echo $row2['user_email']; ?></td>
                                    </tr>

                            <?php

                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='4' class='center-align red-text'>No Blocked Users</td></tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="./index1.js"></script>

<?php include_once '../../footer.php'; ?>