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
        //Connect
        $session = ssh2_connect($arr['ip'], $arr['port']);

        //If the connection is not established
        if (!$session) {
            //Log entry
            $this->reportFile('Connection to ['.$arr["ip"].':'.$arr["port"].'] is failed;');
            return FALSE; 
        //If there is a connection
        } else {
            //Log entry
            $this->reportFile('The connection is established!');

            //Log in
            if (ssh2_auth_password($session, $arr['name'], $arr['pass'])) {
                //Log entry
                $this->reportFile('Log in for the user on the remote machine;');
                return $session;
            } else {
                //Log entry
                $this->reportFile("Account log in failed;");
                return FALSE;
            }
        }   
    }

    //Connect to a remote machine without a password  
    public function connectNone($arr) {
        //Decode json array
        $arr = json_decode($arr, true);

        //Log entry
        $this->reportFile('Connect to ['.$arr["ip"].':'.$arr["port"].'];');
        //Connect
        $session = ssh2_connect($arr['ip'], $arr['port']);

        //If the connection is not established
        if (!$session) {
            //Log entry
            $this->reportFile('Connection to ['.$arr["ip"].':'.$arr["port"].'] is failed;');
            return FALSE;
        //If there is a connection
        } else {
            //Log entry
            $this->reportFile('The connection is established!');

            //Log in
            if (ssh_auth_none($session, $arr['name'])) {
                //Log entry
                $this->reportFile('Log in for the user on the remote machine');
                return $session;
            } else {
                //Log entry
                $this->reportFile('Account log in failed;');
                return FALSE;
            }
        }
    }
}
?>

