<div class="logos">
    <a href="index.php"><img class="logo" src="./img/logo.svg" alt="logo"></a>
    <a href="index.php"><img class="logo-pequeno" src="./img/logo_small.svg" alt="logo"></a>
</div>
<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <?php if (isset($_SESSION["rol"])) { ?>
            <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="index.html">Registrarse</a></li>
        <?php } ?>
    </ul>
</nav>

