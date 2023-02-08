<?php
    session_start();
    require_once('./inc/config.php');
    require_once('./inc/library.php');
    ensureUserIsAutenthicate();

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
    <h1>hello , votre email est <?php echo $_SESSION['email']; ?></h1>
</body>
</html>