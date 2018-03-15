<?php
session_start();
if($_GET['lang']){
    switch($_GET['lang']){
        case "en": $_SESSION['lang'] = "en"; break;
        case "ru": $_SESSION['lang'] = "ru"; break;
        case "uz": $_SESSION['lang'] = "uz"; break;
        default: $_SESSION['lang'] = "ru";
    }
}
if(isset($_SESSION['lang'])){
    $l = $_SESSION['lang'];
}else{
    $_SESSION['lang'] = "ru";
    $l = "ru";
}
//print_r($l); die;
$path = $_SERVER['PHP_SELF'];
//echo $path; die;
if($path == '/blocks/lang.php'){

    header( 'Location: /', true, 307 );
}

?>