<?php
namespace Wafflib;

//Path to root directory
define('ROOT_PATH', __DIR__);
//Path to log-file
define('REPORT_FILE', ROOT_PATH.'/log/report_ssh.txt');
//Checking if the log file exists
if (!file_exists(REPORT_FILE)) {
    mkdir(ROOT_PATH.'/log', 0744, TRUE);
}
?>
