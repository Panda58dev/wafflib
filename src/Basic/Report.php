<?php
namespace Wafflib\Basic;

class Report
{
    //A variable that stores the file descriptor
    private $file;

    //Receive the descriptor
    public function getFile()
    {
        return $this->file;
    }

    //Change the descriptor
    public function setFile($value)
    {
        $this->file = $value;
        return TRUE;
    }

    //Sending a log
    public function reportFile(string $message) : bool 
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
