<?php include_once '../../header.php'; ?>

<link rel="stylesheet" href="./index.css">

<main>
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
                <div id="profile" class="col s12">Test 1</div>
                <div id="liked" class="col s12">Test 2</div>
                <div id="unliked" class="col s12">Test 3</div>
                <div id="favourite" class="col s12">Test 4</div>
                <div id="blocked" class="col s12">Test 5</div>
            </div>
        </div>
    </section>
</main>

<script src="./index1.js"></script>

<?php include_once '../../footer.php'; ?>