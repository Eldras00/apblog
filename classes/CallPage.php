<?php
class CallPage
{
    static function display()
    {
        $page = $_GET['page'] ?? "";
        $page = "./includes/" . $page . ".inc.php";

        $files = glob("./includes/*.inc.php");

        if (in_array($page, $files))
            include $page;
        else
            include "./includes/home.inc.php";
    }
}