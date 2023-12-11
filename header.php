<style>
    header {
        background-color: #7DF9FF;
        padding: 16px;
        height: 10vh;
    }

    .Upper-Section {
        margin-left: 5vw;
        margin-right: 5vw;
        height: 5vh;
    }

    .Lower-Section {
        margin-left: 5vw;
        margin-right: 5vw;
        height: 5vh;
    }
    .headerContainer {
        width: 100%;
    }
    .homepage-Logo {
        height: auto;
        position: absolute;
        left: 2rem

    }
    .loginButtons {
        display: flex;
        align-items:center;
        margin-left: auto;
        width: max-content;
        gap: 16px;
    }
    .loginButtons a {
        color: black;
        text-decoration: none;
    }
    .loginButtons a:hover {
        text-decoration: underline;
    }
    nav {
        margin-top: 0;
        background-color: #6edce1;
        width: 100%;
        padding: 4px 0px;
        display: flex;
        justify-content: space-around;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
    }
    nav a {
        text-decoration: none;
        border-radius: 5px;
        color: black;
        padding: 8px;
        transition-duration: 0.2s;
    }
    nav a:hover {
        background-color: rgba(255, 255, 255, 0.3);
    }
    .searchbar {
        background-color: white;
        border: 1px solid grey;
        height: max-content;
        width: 400px;
        display: flex;
        align-items: center;
        border-radius: 5px;
        margin: 0 auto 0 auto;
    }
    .searchbar i {
        padding: 8px;
    }
    .searchbar input {
        background-color: transparent;
        border:none;
        padding: 8px;
        width: 100%;
    }


    .homepage-Logo {
        height: 7vh;
    }
</style>
<header>
    <div class="Upper-Section">
        <img class="homepage-Logo" src="img/Logo-NerdyGadgets.png" alt="Logo">
        <div class="headerContainer">
            <div class="loginButtons">
                <a href="./uitchecken">Uitchecken</a>
                <a href="./login">Login/Registratie</a>
            </div>
        </div>
    </div>
    <div class="Lower-Section">
        <div class="searchbarContainer">
            <form method="GET" action="./search.html">
                <span class="searchbar">
                    <i class="uil uil-search"></i>
                    <input name="q" type="text" />
                </span>
            </form>
        </div>
    </div>

</header>
<nav>
    <a href="./winkel">Winkel</a>
    <a href="./gadgets">Gadgets</a>
    <a href="./sale">Sale</a>
    <a href="./klantenservice">Klantenservice</a>
</nav>
