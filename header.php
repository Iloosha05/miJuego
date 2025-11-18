
<a href="index.php"><img class="logo" src="./img/logo.svg" alt="logo"></a>
<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <?php if (isset($_SESSION["rol"])) { ?>
            <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
        <?php } ?>
        <li><a href="index.html">Registrarse</a></li>
    </ul>
</nav>

