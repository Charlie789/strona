<?php
echo '<script src="/js/cookie.js"></script>';
$file = basename($_GET['file']);
$user_name = $_COOKIE['zad7_user'];
$file = "/pliki/$user_name/".$file;

if(!file_exists($file)){ // file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
}
?>