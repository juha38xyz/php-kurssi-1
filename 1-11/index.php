<?php

$randomNumber = rand(0, 5000);

if($randomNumber > 4000){
    echo "A";
}
elseif($randomNumber === 0 || $randomNumber === 1000){
    echo "B";
}
elseif($randomNumber / 2 && $randomNumber < 3000){
    echo "C";
}
else{
    echo "D";
}