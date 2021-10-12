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

class Main 
{
    private $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($value)
    {
        $this->file = $value;
        return TRUE;
    }

    public function reportFile($message) : bool 
    {
        if ($this->setFile(fopen(REPORT_FILE, 'a'))) {
            fwrite($this->getFile(), date('d.m G:i:s - ').$message.PHP_EOL);
            $this->setFile(fclose($this->getFile()));
            return TRUE;
        } else {
            return FALSE;
        }
    }


}

?>
