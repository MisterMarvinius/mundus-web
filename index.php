<?php

$navData = [
    "home" => ["name" => "Home", "class" => "", "show" => true],
    "survival" => ["name" => "Survival", "class" => "", "show" => true],
    "games" => ["name" => "Minigames", "class" => "", "show" => true],
    //"gpvp" => ["name" => "Guild PVP", "class" => "", "show" => true],
    "rules" => ["name" => "Fake Rules", "class" => "", "show" => true],
    "team" => ["name" => "Our Team", "class" => "", "show" => true],
    "contact" => ["name" => "Wusi", "class" => "", "show" => false],
];

$includePath = "error.php";

if(isset($_GET["site"])) {
    $name = $_GET["site"];
    if(array_key_exists($name, $navData)) {
        $includePath = "$name.php";
        $navData[$name]["class"] = "active";
    }
} else {
    $includePath = "home.php";
    $navData["home"]["class"] = "active";
}

include "index.view.php";
