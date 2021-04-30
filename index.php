<?php
    session_start();

    require "Core/constants.php";
    require "Core/functions.php";

    if(!isset($_GET['p']) || $_GET['p'] == "")
    {
        $page = "home.php";
    }
    else
    {
        if(file_exists("Controllers/".$_GET['p'].".php"))
        {
            $page = $_GET["p"].".php";
        }
        else
        {
            $page = "404.php";
        }
    }

    ob_start();
        require "Controllers/".$page;
        $content = ob_get_contents();
    ob_end_clean();

    require "template.php";
?>