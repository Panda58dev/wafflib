<?php
namespace Wafflib\Basic;

class Report
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
