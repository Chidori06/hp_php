<?php

$data = file_get_contents("https://hp-api.onrender.com/api/characters");
$dataDecode = json_decode($data, true);
// var_dump($dataDecode);
?>