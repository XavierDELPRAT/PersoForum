<?php
    session_start();

    require "core/constants.php";
    require "core/functions.php";

    if(!isset($_GET['p']) || $_GET['p'] == "")
    {
        $page = "home.php";
    }
    else
    {
        if(file_exists("/controllers/".$_GET['p'].".php"))
        {
            $page = $_GET["p"].".php";
        }
        else
        {
            $page = "404.php";
        }
    }

    ob_start();
        require "/controllers/".$page;
        $content = ob_get_contents();
    ob_end_clean();

    require "template.php";
?>