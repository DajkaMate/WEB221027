<?php
    $content = "mainpage.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "oldal1":
            $content = "oldal1.php";
            break;
            case "oldal2":
                $content = "oldal2.php";
            break;
            case "oldal3":
                $content = "oldal3.php";
            break;
            case "oldal4":
                $content = "oldal4.php";
            break;
            case "oldal5":
                $content = "oldal5.php";
            break;
            case "oldal6":
                $content = "oldal6.php";
            break;
        }
    }
?>