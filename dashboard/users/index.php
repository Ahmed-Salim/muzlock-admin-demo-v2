<?php include_once '../header.php'; ?>

<link rel="stylesheet" href="./index.css">

<main>
    <h1 class="center-align">Muzlock Users</h1>

    <section class="table-parent section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Age</th>
                    <th>Country</th>
                    <th>Sect</th>
                    <th>Revert</th>
                    <th>Religion</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Language</th>
                    <th>Origin</th>
                    <th>Smoke</th>
                    <th>Job Title</th>
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
                            <td><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_pass']; ?></td>
                            <td><?php echo $row['user_age']; ?></td>
                            <td><?php echo $row['user_country']; ?></td>
                            <td><?php echo $row['user_sect']; ?></td>
                            <td><?php echo $row['user_revert']; ?></td>
                            <td><?php echo $row['user_religion']; ?></td>
                            <td><?php echo $row['user_phone']; ?></td>
                            <td><?php echo $row['user_gender']; ?></td>
                            <td><?php echo $row['user_dob']; ?></td>
                            <td><?php echo $row['user_lang']; ?></td>
                            <td><?php echo $row['user_origin']; ?></td>
                            <td><?php echo $row['user_smoke']; ?></td>
                            <td><?php echo $row['user_jobTitle']; ?></td>
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