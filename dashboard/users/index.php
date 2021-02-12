<?php include_once '../header.php'; ?>

<link rel="stylesheet" href="./index.css">

<main>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <div class="col s12">
                    <a href="../" class="breadcrumb">Dashboard</a>
                    <a href="./" class="breadcrumb">Muzlock Users</a>
                </div>
            </div>
        </div>
    </nav>

    <h1 class="center-align">Muzlock Users</h1>

    <section class="table-parent section container">
        <table class="highlight centered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include_once('../../php-scripts/db-config.php');

                $sql = "SELECT * FROM user ORDER BY user_name ASC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $count = 1;

                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                        <tr>
                            <th scope="row"><?php echo $count; ?></td>
                            <td><img class="materialboxed" src="<?php echo $row['user_img']; ?>" alt="<?php echo $row['user_name']; ?>" height="100px"></td>
                            <td><a href="./user/?user_id=<?php echo $row['id']; ?>" class="btn"><?php echo $row['user_name']; ?></a></td>
                            <td><?php echo $row['user_email']; ?></td>
                        </tr>

                <?php

                        $count++;
                    }
                } else {
                    echo "<tr><td colspan='17' class='center-align'>No Users!</td></tr>";
                }

                ?>

            </tbody>
        </table>
    </section>
</main>

<script src="./index1.js"></script>

<?php include_once '../footer.php'; ?>