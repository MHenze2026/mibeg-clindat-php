<?php
require_once("functions.php");

is_event();

function is_even(int $num): string {
    if ($num % 2 === 0) {
        return "$num ist gerade.\n";
    }
    else {
        return "$num ist ungerade.\n";

    }

}
is_even($num)


function is_even() {
    $num = (int)readline("Geben Sie eine Zahl ein: ");
    
    if ($num % 2 === 0) {
        print "$num ist gerade.\n";
    }
    else {
        print "$num ist ungerade.\n";
    }
}

is_even();




