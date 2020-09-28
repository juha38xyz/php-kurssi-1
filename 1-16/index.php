<?php
$firstNames = [
    'Matti',
    'Saara',
    'Timo'
];

$lastNames = [
    'Mallikas',
    'Esimerkkinen',
    'Testinen'
];

foreach($firstNames as $f){
    foreach($lastNames as $l){
        echo "$f $l. <br/>\n";
    }
}