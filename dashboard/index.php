<?php include_once './header.php'; ?>

<main>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <div class="col s12">
                    <a href="./" class="breadcrumb">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="center-align">Welcome <?php echo $_SESSION['admin_username']; ?></h1>

        <div class="row">
            <div class="col s12 m6 xl4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">

                            <?php

                            include_once('../php-scripts/db-config.php');

                            $sql = "SELECT COUNT(*) AS muzlock_users FROM user";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['muzlock_users'];
                                }
                            } else {
                                echo "0";
                            }

                            ?>
                            Total Users
                        </span>
                    </div>
                    <div class="card-action">
                        <a href="./users/add">Add User</a>
                        <a href="./users">View All Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once './footer.php'; ?>