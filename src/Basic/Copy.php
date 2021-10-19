<?php
namespace Wafflib\Basic;

class Copy {

    //Copying a file to the host machine
    public function copy($session, string $remote_path, string $host_path = $_SERVER['USERPROFILE'])
    {
        //Log entry
        Report::reportFile('Copying file ['.$remote_path.'] to the host-machine');

        //Copying using scp
        if (ssh2_scp_recv($session, $remote_path, $host_path)){
            //Operation successful
            //Log entry
            Report::reportFile('The copy operation was successful!');
            return TRUE;
        } else {
            //Operation failed
            //Log entry
            Report::reportFile('The copy operation failed!');
            return FALSE;
        }
    }
}
?>
