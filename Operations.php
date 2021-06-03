<?php	

    /**
     * This is a class with methods that describe file operations
     */
    namespace Main;
    
    class Operations
    {
       //Purpose of the function leading logging
        public function reportFile($message)
        {   
            $file = fopen(REPORT_FILE, 'a');
            fwrite($file, date('d.m G:i:s - ').$message.PHP_EOL);
            fclose($file);
        }

        //Copying a file to the host machine
        public function copyFile($arr)
        {   
            //Decode json array
            $arr = json_decode($arr);

            //Log entry
            $this->reportFile('Coping file ['.$arr['file_name'].'] to the host-machine');

            //Copying using scp
            if (ssh2_scp_recv($arr['session'], $arr['dir_serv_name'].'/'.$arr['file_name'], $arr['hard_name'].'\\'.$arr['dir_win_name'].'\\'.$arr['file_name'], 0744)) {
                //Operation successful
                //Log entry
                $this->reportFile('The copy operation was successful!');
                return TRUE;
            } else {
                //Operation failed
                //Log entry
                $this->reportFile('The copy operation failed!');
	    	    return FALSE;
            }

        }

        //Sending files to a remote machine
        public function sendFile($arr)
        {
            $arr = json_decode($arr);

            //Log entry
            $this->reportFile('Sending a file to a remote machine;');

            //Sending using scp
            if (ssh2_scp_send($arr['session'], $arr['hard_name'].'\\'.$arr['dir_win_name'].'\\'.$arr['file_name'], $arr['dir_serv_name'].'/'.$arr['file_name'], 0744)) {
                //Operation successful
                //Log entry
                $this->reportFile('The send operation was successful!');
                return TRUE;
            } else {
                //Operation failed
                //Log entry
                $this->reportFile('The send operation failed!');
                return FALSE;
            }
        }

    }
?> 
