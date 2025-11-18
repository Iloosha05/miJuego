<?php
session_start();

$message = "Introduzco su usuario y contraseña.";
$user = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("./bbdd.php");
    try {
        $conecta = new PDO($cadena_conexion, $usuario, $clave);

        $user = $_POST["user"];
        $password = $_POST["password"];

        $query = 'SELECT user, rol FROM users WHERE user = :user AND password= :password';
        $consulta = $conecta->prepare($query);
        $consulta->bindParam(":user", $user);
        $consulta->bindParam(":password", $password);
        $consulta->execute();

        if($consulta->rowCount() > 0){
            foreach ($consulta as $row) {
                $rol = $row["rol"];
            }
            
            $_SESSION["user"] = $user;
            $_SESSION["rol"] = $rol;
            
            header("Location: index.php");
            exit();
        } else {
            $message = "Revise su usuario y contraseña.";
        }
    } catch (PDOException $e) {
        // echo 'Sin conexión: ' . $e->getMessage();
        $message = "Se ha producido un error. Inténtelo más tarde.";
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Importamos el fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Importamos el fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> <!-- Importamos el fuente -->
</head>

<body>
    <header>
        <?php require_once("./header.php"); ?>
    </header>
    <main class="login-main">
        <div class="content">
            <div class="login">
                <h1>Login</h1>

                <form method="post" action="">
                    <label for="user">Usuario</label><br>
                    <input type="text" name="user" id="user" value="<?php echo $user; ?>" required><br>

                    <label for="password">Contraseña</label><br>
                    <input type="password" name="password" id="password" required><br>

                    <input type="submit" name="submit" id="submit" value="Enviar">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once("./footer.php"); ?>
    </footer>
</body>

</html>
