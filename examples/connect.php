<!DOCTYPE html>
<html>
    <head>
        <meta charset="en">
        <title>Example file</title> 
    </head>
    <body>
        <?php
            require_once "..\Operations.php";
            require_once "..\connect.php";
        ?>
        <h1>Test connections</h1>
        <form action="" method="POST">
            <input type="text" placeholder="Your IP" name="ip">
            <input type="text" placeholder="Your port" name="port">
            <br><br>
            <input type="text" placeholder="User name" name="name">
            <input type="password" placeholder="Password" name="pass">
            <br><br>
            <button type="submit">Connect</button>
        </form>
        <?php 
            $arr = json_encode($_POST);
            $connect = new connect;
            $connect->connectOpen($arr);
        ?>
    </body>
</html>
