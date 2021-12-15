<?php
    session_start();
    if(isset($_SESSION['username'])) {
        header("Location:panel.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="boxLogin">
        <form action="validate.php" method="POST">
            <label>
                User: <input type="text" name="username">
            </label>
            <label>
                Password:<input type="text" name="password">
            </label>
            <label>
                <input type="submit" value="Send Data">
            </label>
        </form>
    </div>
</body>
</html>