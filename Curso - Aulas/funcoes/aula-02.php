<?php

function soma(float ...$num): float{
    return array_sum($num)+0.5;
}

echo soma(1,2,3,4,5,6,7);

?>