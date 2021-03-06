<?php

namespace Wafflib\Basic;

class Copy
{



    //Copying a file to the host machine
    public function copy($session, string $remote_path, string $host_path)
    {
        //Log entry
        Report::reportFile('Copying file [' . $remote_path . '] to the host-machine');
		//Copying using scp
		//Operation successful
        if (ssh2_scp_recv($session, $remote_path, $host_path)) {
            //Log entry
            Report::reportFile('The copy operation was successful!');
            return true;
        //Operation failed
        } else {
            //Log entry
            Report::reportFile('The copy operation failed!');
            return false;
        }
    }
}
