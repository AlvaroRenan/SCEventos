<?php
class Bootstrap
{

    function __construct()
    {
        $REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');

        $INITE = strpos($REQUEST_URI, '?');
        if($INITE)
            $REQUEST_URI = substr($REQUEST_URI,0,$INITE);

        $URL = array_filter(explode('/', substr($REQUEST_URI,1)));

        //print_r($URL);

        $File = 'Controllers/' . $URL[1] . '.php';

        if(file_exists($File))
        {
            require $File;
        }
        else
        {
            require 'Controllers/page404.php';
            $Page404 = new Page404();
            return false;
        }

        $Controller = new $URL[1];

        if(isset($URL[3]))
        {
            $Controller->{$URL[2]}($URL[3]);
        }
        else
        {
            if(isset($URL[2]))
            {
                $Controller->{$URL[2]}();
            }
        }
    }
}
?>
