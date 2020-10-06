<?php

$rows = file(__DIR__ . '/maakunnat.txt');

$list =[];

foreach($rows as $row){
    $parts = explode(';' , $row);
    $list[$parts[0]] = (int) $parts[1];


}

arsort($list);

$text = "";

foreach($list as $maakunta => $vakiluku){
    if($vakiluku % 2 !==0 ){
        $text .= "$maakunta; $vakiluku\n";
    }

}

file_put_contents(
    __DIR__ . '/maakunnat_vastaus.txt', $text);

