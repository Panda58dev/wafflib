<?php

/**
*  Class desabling the programm
*/ 

Namespace Main;
class PowerOFF extends Operations 
{
    //Function web-server shutdown
    public function PowerOff($session)
    {
        //Log entry
        $this->reportFile('Disconnecting from a remote machine');

        //Disabling ssh connection
        ssh2_disconnect($session);
        //Pause 10s
        sleep('10');
        //Log entry
        $this->reportFile('Stopping the web server');
        //Killing process
        exec('taskkill /FI "IMAGENAME eq php.exe" /F');
    }     
}

?>
