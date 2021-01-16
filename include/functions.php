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
function distribute($numbers)
{
        $count = array_count_values($numbers); // number of occurrence
        $uniqueNum = removeDups($numbers); // elements after remove of duplicates
        $numAssocArr = array_combine($uniqueNum,$count);
        ksort($numAssocArr);
        echo "[";
        foreach ($numAssocArr as $key => $value)
        {
            echo"$key => $value, ";
        }
        echo "]";
}

