<?php

session_start();

require_once("./bbdd.php");

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
        <?php require_once('./header.php'); ?>
    </header>
    <main>
        <div class="content"> <!-- El contenedor general -->
            <div class="arriva"> <!-- El volumen dónde van a aparecer imagen y fica -->
                <img class="imagen" id="imagen" src="./img/tittle-image.png">
                <div class="derecho">
                    <div class="ficha"> <!-- El campo de la ficha -->
                        <h3>Ficha</h3>
                        <p>Nombre: <span id="nombre">Jugador</span></p>
                        <p>Fuerza: <span id="fuerza">10</span></p>
                        <p>Defensa: <span id="defensa">5</span></p>
                        <p>Vida: <span id="vida">100</span></p>
                        <p>Oro: <span id="oro">50</span></p>
                        <p>Pociones: <span id="pociones">2</span></p>
                    </div>
                </div>
            </div>
            <div class="bajo"> <!-- EL contenedor para la información de gameplay -->
                <h2 id="locacion">Calle Lenin</h2>
                <textarea id="texto-juego"></textarea>
            </div>
            <div class="botones"> <!-- El contenedor para los botones -->
                <div class="accion"> <!-- El contenedor para los botones de acción -->
                    <button id="boton1">Botón-1</button>
                    <button id="boton2">Botón-2</button>
                </div> 
                <div class="icon-bar"> <!-- El contenedor para los iconos -->
                    <img class="icon" src="./img/play2.svg" alt="ejecutar">
                    <img class="icon" src="./img/pause1.svg" alt="parar">
                    <img class="icon" src="./img/save2.svg" alt="guardar">
                    <img class="icon" src="./img/load2.svg" alt="parar">
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once('./footer.php'); ?>
    </footer>
</body>
</html>