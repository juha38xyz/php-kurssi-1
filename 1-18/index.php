<?php



function generateNames(int $count, string $prefix = ""):array
{
    $firstNames = ['Mikko', 'Matti', 'Antti', 'Simo', 'Anna', 'Siiri', 'Mira', 'Jaana'];
    $lastNames  = ['Meikäläinen', 'Onnekas', 'Mallikas', 'Testaaja', 'Esimerkkinen'];

   if($count < 1 || $count > 20){
       $count = 1;
   }

   if(strlen($prefix) > 20){
       $prefix = "";
   }

   $result = [];

   for($i = 0: $s < $count; $i++){
       $first = $firstNames[rand(0, (count($firstNames )-1))];
       $last = $lastNames[rand(0, (count($lastNames)-1 ))];

       $result[] = $prefix . " " . $first . " " . $last;

   }

   return $result;


}
print_r();

