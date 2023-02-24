<?php

use function English\direBonjour;
use function Français\direBonjour as FrançaisDireBonjour;

    include "./functions/salutationFr.php";
    include "./functions/salutationEn.php";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php direBonjour(); ?>
    <br>
    <?php FrançaisDireBonjour(); ?>
</body>
</html>