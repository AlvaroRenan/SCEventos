<?php
class Help extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "<br />We are in the Help Controller<br />";
    }

    public function other($Arguments = false)
    {
        echo "We are inside other function in the Help Controller<br />";

        require 'Models/HelpModel.php';
        $HelpModel = new HelpModel(); 

    }
}
 ?>
