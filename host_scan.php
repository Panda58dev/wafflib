<?php 

    /**
     * This is a class with a method for scanning the directory on the host machine
     */
    namespace Host;

    class scanWin extends \Main\Operations
    {

        //Scanning directories on the host mashin
        public function ParsingDir($arr)
        {   
            //Decode JSON array
            $arr = json_decode($arr);


            //Log entry
            $this->reportFile('Run scanning directories on the host machine;');

            //The path to the desired directory
            $this->way = $arr['hard_name'].'\\'.$arr['dir_name'];

            //Parsing everything contained in the directory
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

    class scanLin extends \Main\Operations
    {
        public function ParsingDir($arr)
        {
            //Decode JSON array
            $arr = json_decode($arr);

            //Log entry
            $this->reportFile('Run scanning directories on the host machine');

            //The path to desired directory
            $this->way = $arr['dir_name'];

            //Parsing everything contained in the directory
            $dir = scandir($this->way);

            foreach ($dir as $key => $value) {
                //If the array element is a directory, its name is appended to "/"
                if (is_dir($dir[$key])) {
                    $dir[$key] = $value.'/';
                }
            }

            //Log entry
            $this->reportFile('The catalog scan was successful');

            //Sending an array in JSON format
            return json_encode($dir);
        }
    }

?>
