<?php
namespace Wafflib\Basic;

class Report
{
    //A variable that stores the file descriptor
    private static $file;

    //Receive the descriptor
    public static function getFile()
    {
        return self::$file;
    }

    //Change the descriptor
    public static function setFile($value)
    {
        self::$file = $value;
        return TRUE;
    }

    //Sending a log
    public static function reportFile(string $message) : bool 
    {
        if (self::setFile(fopen(REPORT_FILE, 'a'))) {
            fwrite(self::getFile(), date('d.m G:i:s - ').$message.PHP_EOL);
            self::setFile(fclose(self::getFile()));
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
?>
