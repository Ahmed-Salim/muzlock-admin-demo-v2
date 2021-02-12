<?php include_once '../../header.php'; ?>

<main>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <div class="col s12">
                    <a href="../../" class="breadcrumb">Dashboard</a>
                    <a href="../" class="breadcrumb">Muzlock Users</a>
                    <a href="./" class="breadcrumb">Add User</a>
                </div>
            </div>
        </div>
    </nav>

    <h1 class="center-align">Add User</h1>

    <section class="section container">
        <form method="POST" action="../../../php-scripts/add-user.php">
            <div class="row">
                <div class="input-field col s12 m6 xl4">
                    <input id="user_img" name="user_img" type="url" class="validate" required>
                    <label for="user_img" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Image</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_name" name="user_name" type="text" class="validate" required>
                    <label for="user_name" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Name</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_email" name="user_email" type="email" class="validate" required>
                    <label for="user_email" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Email</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_pass" name="user_pass" type="text" class="validate" required>
                    <label for="user_pass" class="tooltipped red-text" data-position="top" data-tooltip="Required Field">User Password</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_age" name="user_age" type="number" class="validate">
                    <label for="user_age">User Age</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_country" name="user_country" type="text" class="validate">
                    <label for="user_country">User Country</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_sect" name="user_sect" type="text" class="validate">
                    <label for="user_sect">User Sect</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_revert" name="user_revert" type="text" class="validate">
                    <label for="user_revert">User Revert</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_religion" name="user_religion" type="text" class="validate">
                    <label for="user_religion">User Religion</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_phone" name="user_phone" type="text" class="validate">
                    <label for="user_phone">User Phone</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_gender" name="user_gender" type="text" class="validate">
                    <label for="user_gender">User Gender</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_dob" name="user_dob" type="date" class="validate">
                    <label for="user_dob">User Date of Birth</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_lang" name="user_lang" type="text" class="validate">
                    <label for="user_lang">User Language</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_origin" name="user_origin" type="text" class="validate">
                    <label for="user_origin">User Origin</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_smoke" name="user_smoke" type="text" class="validate">
                    <label for="user_smoke">User Smoke</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <input id="user_jobTitle" name="user_jobTitle" type="text" class="validate">
                    <label for="user_jobTitle">User Job Title</label>
                </div>
                <div class="col s12 center-align">
                    <button class="btn btn-large" type="submit" name="action">
                        Add
                        <i class="material-icons right">add</i>
                    </button>
                </div>
            </div>
        </form>
    </section>
</main>

<script src="./index1.js"></script>

<?php include_once '../../footer.php'; ?>