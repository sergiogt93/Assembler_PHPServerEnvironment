<?php
    session_start();
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
    <?php
        if(isset($_SESSION["username"])) {
            echo "<p>Has iniciado sesión</p>";
            echo "<form action='close_session.php'><input type='submit' value='Sign out'></form>";
        } else {
            echo "No has inciado sesión, se trata de una sección privada";
        }
    ?>
</html>