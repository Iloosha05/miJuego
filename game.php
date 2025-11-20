<!DOCTYPE html>
<html lang="en">
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
            <div class="bajo-left">
                <h2 id="locacion">Calle Lenin</h2>
                <textarea id="texto-juego"></textarea>
            </div>
            <div class="bajo-right">
                <div class="controladores">
                    <div class="row1">
                        <a class="btn n">
                            <img class="normal" src="./img/contr_n.svg" alt="norte">
                            <img class="hover" src="./img/contr_n_h.svg" alt="norte">
                        </a>
                    </div>
                    <div class="row2">
                        <a class="btn o">
                            <img class="normal" src="./img/contr_o.svg" alt="oeste">
                            <img class="hover" src="./img/contr_o_h.svg" alt="oeste">
                        </a>
                        <a class="btn c">
                            <img src="./img/contr_c.svg" alt="centro">
                        </a>
                        <a class="btn e">
                            <img class="normal" src="./img/contr_e.svg" alt="este">
                            <img class="hover" src="./img/contr_e_h.svg" alt="este">
                        </a>
                    </div>
                    <div class="row3">
                        <a class="btn s">
                            <img class="normal" src="./img/contr_s.svg" alt="sur">
                            <img class="hover" src="./img/contr_s_h.svg" alt="sur">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="botones"> <!-- El contenedor para los botones -->
            <div class="accion"> <!-- El contenedor para los botones de acción -->
                <button id="boton1">Botón-1</button>
                <button id="boton2">Botón-2</button>
            </div> 
            <div class="icon-bar"> <!-- El contenedor para los iconos -->
                <a class="icon-btn play">
                    <img class="normal" src="./img/play2.svg" alt="ejecutar">
                    <img class="hover" src="./img/play_hover.svg" alt="ejecutar">
                </a>
                <a class="icon-btn pause">
                    <img class="normal" src="./img/pause1.svg" alt="parar">
                    <img class="hover" src="./img/pause_hover.svg" alt="parar">
                </a>
                <a class="icon-btn save">
                    <img class="normal" src="./img/save2.svg" alt="guardar">
                    <img class="hover" src="./img/save_hover.svg" alt="guardar">
                </a>
                <a class="icon-btn load">
                    <img class="normal" src="./img/load2.svg" alt="parar">
                    <img class="hover" src="./img/load_hover.svg" alt="parar">
                </a>
            </div>
        </div>
    </div>
</body>
</html>