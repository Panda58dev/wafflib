<?php
namespace Wafflib;

//Path to root directory
define('ROOT_PATH', __DIR__);
//Path to log-file
define('REPORT_FILE', dirname(ROOT_PATH, 1).'/log/report_ssh.txt');
//Checking if the log file exists
if (!file_exists(REPORT_FILE)) {
    mkdir(dirname(ROOT_PATH, 1).'/log', 0744, TRUE);
}
?>
