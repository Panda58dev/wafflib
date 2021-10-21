<?php

namespace Wafflib\Basic;

class Send
{
    //Sending files to remote machine
    public function send($session, string $host_path, string $remote_path)
    {
        //Log entry
        Report::reportFile('Sending a file [' . $host_path . '] to remote machine');
		//Sending using scp
		//Operation successful
        if (ssh2_scp_send($session, $host_path, $remote_path, 0744)) {
            //Log entry
            Report::reportFile('The send operation was successful!');
            return true;
			//Operation failed
        } else {
            //Log entry
            Report::reportFile('The send operation failed!');
            return false;
        }
    }
}
