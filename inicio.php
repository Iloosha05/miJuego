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
    <header>
        <?php require_once('./header.php') ?>
    </header>
    <main>
        <div class="content">
            <div class="inicio">
                <a class="button" href="./index.php">
                    <button>
                        Iniciar juego
                    </button>
                </a>
                <button>
                    Guardados
                </button>
                <button>
                    Ajustes
                </button>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once('./footer.php') ?>
    </footer>
</body>
</html>