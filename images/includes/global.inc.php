<?php
//global.inc.php
session_start();
$l = $_SESSION['lang'];
require_once 'blocks/lang.php';
require 'lang/'.$l.'.php';
//print_r('lang/'.$l.'.php');die;
//print_r($lang);
function lang($word){
    $l = $_SESSION['lang'];
    require 'lang/'.$l.'.php';
    $translate = $lang[$word];
    if(trim($translate) == '')$translate = $word;
    return $translate;
}
