<?php

$json = file_get_contents("https://raw.githubusercontent.com/Afyrus/YeslyDevs/master/data/main.json");
$yesly = json_decode($json, true);

?>