<?php 
    $myName = '';
    $myAge = '';
    $myName = $_POST['fullName'];
    $myAge = $_POST['age'];

    
        $myName = $_POST['fullName'];
        $myAge = $_POST['age'];
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
    <h1><?php echo $myName ?></h1>
    <p><?php echo $myAge ?></p>
</body>
</html>