<?php

Namespace Main;
/**
* Connections class
*/

class connect extends Operations 
{
    //Connect to remote server
    public function connect($arr) { 
        //Decode json array
        $arr = json_decode($arr, true);

        //Log entry
        $this->reportFile('Connect to ['.$arr["ip"].':'.$arr["port"].'];');
        $session = ssh2_connect($arr['ip'], $arr['port']);
        //If the connection is not established
        if (!$session) {
            //Log entry
            $this->reportFile('Connection to ['.$arr["ip"].':'.$arr["port"].'] is failed;');
            return json_encode(FALSE); 
        //If there is a connection
        } else {
            //Log in
            if (ssh2_auth_password($session, $arr['name'], $arr['pass'])) {
                //Log entry
                $this->reportFile('Log in for the user on the server;');
                return $session;
            } else {
                //Log entry
                $this->reportFile("Account log in failed;");
                return json_encode(FALSE);
            }
        }   
    }
}
?>

