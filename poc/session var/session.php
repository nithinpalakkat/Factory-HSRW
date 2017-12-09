<?php
    session_start();
//This is the default language. We will use it 2 places, so i am put it 
//into a varaible.
$defaultLang = 'en';

if (!empty($_GET["languageKey"])) {
        $_SESSION["lanuagekey"] = $_GET["lanuagekey"];
    }

//If there was no language initialized, (empty $_SESSION['lang']) then
if (empty($_SESSION["languageKey"])) {
    //Set default lang if there was no language
    $_SESSION["languageKey"] = $defaultLang;
}
?>