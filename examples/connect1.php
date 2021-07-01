<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example file</title>
</head>
<body>
    <?php
        require "../Operations.php";
        require ROOT_PATH."/Сonnect.php";
        $arr = json_encode($_POST);
        $connect = new \Main\connect;
        $desc = $connect->connect($arr);
        if ($desc !== FALSE) {
            echo '<h1>The connection is established</h1>';
            echo '<h3>Descriptor: </h3>'.$desc;
        } else {
            echo '<h1>ERROR!!!</h1>';
        }
    ?>
</body>
</html>
