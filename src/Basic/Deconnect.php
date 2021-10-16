<?php
namespace Wafflib\Basic;

class Disconnect
{
    public static function disconnect($session)
    {
        //Log entry
        Report::reportFile('Disconnecting from a remote machine');

        //Disabling ssh connection
        ssh2_disconnect($session);
    }
}
?>
