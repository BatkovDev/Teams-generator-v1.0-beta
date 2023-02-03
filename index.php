<?php
$array = ["Ad1yar","bqtk0vdev","Artemida","NikitaBlack",'Amirka',"Daniluk"];
$teams = [];
$count = 0;
shuffle($array);
foreach($array as $ok){
    $teams[$count/2][] = $ok;
    $count++;
}
$count = 1;
foreach($teams as $team){
    print("Team {$count}: ".implode(" & ", $teams[$count-1])."\n");
    $count++;
}
