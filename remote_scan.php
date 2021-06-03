<?php 

    /**
     * This is a class with a method for scanning a directory on a remote machine
     */
    namespace Remote;

    class Scan extends \Main\Operations
    {

        //Scanning dirictories on the remote machine
        public function ParsingDir($arr)
        {
            //Decode json array
            $arr = json_decode($arr);

            //Log entry
            $this->reportFile('Run scanning directories on the remote machine;');

            //Variable containing path to remote directory
            $this->way = 'ssh2.sftp://'.$arr['sftp'].$arr['dir_name'];

            //Parsing directory
            $dir = scandir($this->way);

            foreach ($dir as $key => $value) {
                //If the array element is a directory, its name is appended to "\"
                if (is_dir($dir[$key])) {
                    $dir[$key] = $value.'\\';
                }
            }

            //Log entry
            $this->reportFile('The catalog scan was successful!');

            //Sending an array in JSON format
            return json_encode($dir);
        }

    }

?>
