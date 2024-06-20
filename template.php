<?php
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    header("Expire: 0");

    //affichage des erreurs
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="static/style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/style.css">
</head>
<body>
    <header>
        <h1>MyStock</h1>
        <ul>
            <li><a href="#">Ajouter un article</a></li>
            <li><a href="#">Mes articles</a></li>
        </ul>
    </header>

    <h4>Place du menu commun a toutes les pages</h4>
    <?=$content?>
    <h3>FIN TEMPLATE</h3>
</body>
</html>