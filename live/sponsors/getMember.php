<?php

$name = $_GET["name"];
$lang = $_GET["lang"];

$name = str_replace("%20", " ", $name);

$relPath = "../";

$raw = file_get_contents($relPath . "../data/" . $lang ."/sponsors.json");
$sponsors = json_decode($raw, true);


foreach($sponsors as $type => $sponsor) {
    foreach($sponsor as $title => $data)
    if($title == $name) {
        $data['Type'] = $type;
        echo json_encode($data);
        return;
    }
}