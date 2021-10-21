<?php

namespace Wafflib\Basic;

class Exec
{
    private $session;
    public function __construct($session)
    {
        $this->session = $session;
    }

    public function exec(string $command)
    {
        //Log entry
        Report::reportFile('Executing the command:' . PHP_EOL . '[------' . PHP_EOL . $command . PHP_EOL . '------];');
		//Executing the command
        print_r('> ' . $command . PHP_EOL);
        $stream = ssh2_exec($this->session, $command);
        if ($stream) {
			//withholding a response
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            $response = stream_get_contents($stream_out);
            print_r($response);
			//Log entry
            Report::reportFile('Response:' . PHP_EOL . '[------' . PHP_EOL . $response . '------];');
            return true;
        } else {
			//Log entry
            Report::reportFile('The command was not executed;');
            return false;
        }
    }
}
