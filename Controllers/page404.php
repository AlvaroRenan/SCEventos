<?php
    class Page404 extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->View->Render('page404/page404');
        }
    }
?>
