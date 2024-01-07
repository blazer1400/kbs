<link rel="stylesheet" href="./css/index-update.css"/>

<header>
    <div class="Upper-Section">
        <img class="homepage-Logo" src="img/Logo-NerdyGadgets.png" alt="Logo">
        <div class="headerContainer">
            <div class="loginButtons">
                <a href="./uitchecken">Uitchecken</a>
                <?php

                require('./php/db_connection.php');
                session_start();

                if (empty($_SESSION['user_id'])) {
                    echo '<a href="./login.php">Login/Registratie</a>';
                } else {
                    $name = $conn->query("SELECT first_name, surname FROM user WHERE id = " . $_SESSION['user_id'])->fetch_row();
                    echo '<a href="./php/logout.php">Uitloggen</a>
                <p>
                    <i class="uil uil-user"></i>
                    <span>'.(strtoupper(substr($name[0], 0, 1)) . substr($name[0], 1)).' '.(strtoupper(substr($name[1], 0, 1)) . substr($name[1], 1)).'</span>
                </p>';
                }


                ?>
            </div>
        </div>
    </div>
    <div class="Lower-Section">
        <div class="searchbarContainer">
            <form method="GET" action="./search.php">
                <span class="searchbar">
                    <i class="uil uil-search"></i>
                    <input name="q" type="text" />
                </span>
            </form>
        </div>
    </div>

</header>

<nav>
    <a href="./index.php">Home</a>
    <a href="./winkelwagen.php">Winkelwagen</a>
    <a href="./search.php">Sale</a>
    <a href="./klantenservice">Klantenservice</a>
</nav>