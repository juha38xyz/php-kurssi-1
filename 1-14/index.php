<?php

$array = ['Hello', 'World', 'This', 'Is', 'Foreach', 'Loop', 'PHP is easy and fun!'];

foreach($array as $index => $value){
    printf(" '%d', '%s'", $index."<br>", $value."<br>");
}
