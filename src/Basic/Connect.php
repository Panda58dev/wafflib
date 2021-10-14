<?php
namespace Wafflib\Basic;

class Connect 
{
    //A variable that stores the session descriptor
    private $session;

    //Get a descriptor
    public function getSession()
    {
        return $this->session;
    }

    //Change the descriptor
    public function setSession($value)
    {
        $this->session = $value;
        return TRUE;
    }

    public function connect(
        string $ip, 
        string $name, 
        string $pass = NULL,
        int    $port = 22
    ) : mixed
    {
        //Log entry
        Report::reportFile('Connect to ['.$ip.':'.$port.'];');
        //Connect
        $this->setSession(ssh2_connect($ip, $port));

        //If the connection is not established
        if (!$this->getSession()) {
            //Log entry
            Report::reportFile('Connection to ['.$ip.':'.$port.'] is failed;');
            return FALSE;
        //If the connection is not established
        } else {
            //Log entry
            Report::reportFile('The connection is established!');

            //Log in
            if (ssh2_auth_password($this->getSession(), $name, $pass)) {
                //Log entry
                Report::reportFile('Log in for the user ('.$name.') on the remote machine;');
                return $this->getSession();
            } else {
                //Log entry
                Report::reportFile("Account log in failed;");
                return FALSE;
            }
        }
    }
}

?>
