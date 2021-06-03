<?php
/**
* Connections class
*/

class connect extends \Main\Operations 
{
    //Array methods
    private $methods_ssh = array(

        'kex' => 'diffie-hellman-group1-sha1',

        'client_to_server' => array(
            'crypt' =>  'aes256-cbc',
            'comp' => 'zlib',
            'mac' =>  'hmac-sha1-96'
        ),

        'server_to_client' => array(
            'crypt' =>  '3des-cbc',
            'comp' => 'zlib',
            'mac' =>  'hmac-sha1-96'           
        )
        
    );

    //Connect to remote server
    public function connectOpen($arr) { 
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

    //Connect to remote server
    public function connectPrivate($arr) {
        //decode json array
        $arr = json_decode($arr, true);
        //Log entry
        $this->reportFile('Connect to ['.$arr["ip"].':'.$arr["port"].'];');
        $session = ssh2_connect($arr['ip'], $arr['port'], $this->methods_ssh);
        //If the connection is not established
        if (!$session) {
            //Log entry
            $this->reportFile('Connection to ['.$arr["ip"].':'.$arr["port"].'] is failed;');
            return json_encode(FALSE); 
        //If there is a connection
        } else {
            //Log in
            if (ssh2_auth_password($this->session, $arr['name'], $arr['pass'])) {
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

