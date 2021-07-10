<?php
require "../Operations.php";
require ROOT_PATH.'\Connect.php';

$connect = new \Main\connect;
$oper = new \Main\Operations;


$arr = array(
    'ip'    => '',
    'port'  => '',
    'name'  => '',
    'pass'  => ''
);
$arr_copy = array(
    'session'       => $desc,
    'hard_name'     => 'C:',
    'dir_win_name'  => 'Users\panda',
    'dir_serv_name' => '/home/panda',
    'file_name'     => 'test.txt'
);

echo 'Enter the IP of the remote machine'.PHP_EOL.'> ';
$arr['ip'] = trim(fgets(STDIN));
echo 'Enter the port of the remote machine'.PHP_EOL.'> ';
$arr['port'] = trim(fgets(STDIN));
echo 'Enter the user name of the remote machine'.PHP_EOL.'> ';
$arr['name'] = trim(fgets(STDIN));
echo 'Enter the password of the remote machine user'.PHP_EOL.'> ';
$arr['pass'] = trim(fgets(STDIN));

$arr = json_encode($arr);
$desc = $connect->connect($arr);

json_encode($arr_copy);

if ($oper->copyFile($arr_copy)){
    die('The file is copied');
} else {
    die('Fail!');
}
?>
