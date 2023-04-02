<?php 


function getGanjil (int $max): Iterator
{
    for ($i = 1; $i < $max; $i++) 
    {
        if ($i % 2 == 1){
             yield $i;
        }
    }
}

$ganjil = getGanjil(100);
foreach ($ganjil as $total){
    echo "Ganjil $total" . PHP_EOL;
}
?>