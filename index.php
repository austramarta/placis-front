    <?php
    include_once 'header.php';
    ?>
    <div class="main">

        <section class="login-intro">
            <?php
            if (isset($_SESSION["username"])) {
                echo "<p>Welcome back " . $_SESSION["username"] . ", wonderful to see you returning!</p>";
            }
            ?>
        </section>

        <body>


            <script src="https://kit.fontawesome.com/76ec96adb3.js" crossorigin="anonymous"></script>
        </body>
    </div>
    </div>