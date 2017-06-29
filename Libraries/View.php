<?php
class View
{
    function __construct()
    {
        echo "This is the View <br />";
    }

    public function Render($ViewName)
    {
        require ('Views/'. $ViewName . '.php');
    }

}

?>
