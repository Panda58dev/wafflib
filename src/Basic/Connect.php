<?php
namespace Panda58dev\Wafflib\Basic;

class Connect extends Report
{
    public function connect(
        string $ip, 
        int $port = 22, 
        string $name, 
        string $pass = NULL
    ) : mixed
    {
        //Log entry
        $this->reportFile('Connect to ['.$ip.':'.$port.'];');
        //Connect
        $session = ssh2_connect('ip', 'port');

        //If the connection is not established
        if (!$session) {
            //Log entry
            $this->reportFile('Connection to ['.$ip.':'.$port.'] is failed;');
            return FALSE;
        //If the connection is not established
        } else {
            //Log entry
            $this->reportFile('The connection is established!');

            //Log in
            if (ssh2_auth_password($session, $name, $pass)) {
                //Log entry
                $this->reportFile('Log in for the user ('.$name.') on the remote machine;');
                return $session;
            } else {
                //Log entry
                $this->reportFile("Account log in failed;");
                return FALSE;
            }
        }
    }
}

?>
