<?php
Class Controller
{
    function __construct()
    {
        echo "Main Controller<br />";
        $this->View = new View();
    }
}
?>
