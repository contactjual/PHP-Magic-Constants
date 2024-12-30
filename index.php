<?php

// PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

echo __DIR__; // return the direciton of the file
echo __FILE__; // return the file name including the path
echo __LINE__; // return the current line number

function my_function () {
    $name = "Jual";
    echo __FUNCTION__; // return the funciton name
}
my_function ();



?>