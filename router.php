<?php 

/**
 * Router class 
 */

class router extends \Main\Operations
{
    public function path_filter($path)
    {
        //Decode JSON variable
        $path = json_decode($path);

        //Filter HTTP headers
        switch ($path) {
        case preg_match('/.*news/i', $path);
                require ROOT_PATH.'\Assets\classes\news.php';
                return TRUE;
            break;

            case preg_match('/.*user/i', $path):
                require ROOT_PATH.'\Assets\classes\user.php';
                return TRUE;
            break;
        }
    }
}

?>
