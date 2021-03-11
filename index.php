<?php
include_once 'header.php';
?>

<section class="login-intro">
    <?php
    if (isset($_SESSION["username"])) {
        echo "<p>Welcome back " . $_SESSION["username"] . ", wonderful to see you returning!</p>";
    }
    ?>
</section>

<body>

    <main class="main">
        <section>
            <div>
                <a href="">image</a>
                <div>available/not available</div>
                <div>TITLE</div>
                <div>location</div>
            </div>

        </section>
    </main>

</body>


<?php
include_once 'footer.php';
?>