<?php
function printArr($numbers)
{
    foreach ($numbers as $item)
    {
        echo $item.'<br>';
    }
}
function largest($numbers)
{
    return max($numbers);
}
function removeDups($numbers){
    return array_unique($numbers);
}


