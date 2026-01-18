<?php

$navData = [
	"home" => 		["name" => "Home", 			"show" => true, "dropdown" => ""],
	"news" => 		["name" => "Gameplay", 		"show" => true, "dropdown" => "gameplayData"],
	"survival" => 	["name" => "Survival", 		"show" => false, "dropdown" => ""],
	"games" => 		["name" => "Minigames", 	"show" => false, "dropdown" => ""],
	"creative" => 	["name" => "Creative", 		"show" => false, "dropdown" => ""],
	"ranks" => 		["name" => "Ranks", 		"show" => true, "dropdown" => ""],
	"team" => 		["name" => "Team", 			"show" => true, "dropdown" => ""],
	"snuvi" => 		["name" => "SnuviScript", 	"show" => true, "dropdown" => "snuviData"],
	"jokes" => 		["name" => "Jokes", 		"show" => true, "dropdown" => ""],
	"map" => 	    ["name" => "Map", 		"show" => true, "dropdown" => ""],
];

$gameplayData = [
	"survival" => 		["name" => "Survival", 		"icon" => ""],
	"games" => 			["name" => "Minigames", 	"icon" => ""],
	"creative" => 		["name" => "Creative", 		"icon" => ""],
];

$snuviData = [
	"snuvi_core" => 		["name" => "Core", 			"icon" => ""],
	"snuvi_minecraft" => 	["name" => "Minecraft", 	"icon" => ""],
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

include "views/base.view.php";