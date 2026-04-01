<?php
// $word = "Monica";
// $isPalindrome = strtolower($word) === strtolower(strrev($word));

// if ($isPalindrome) {
//     print "true" . "\n";

// }
// else {
//     print "false" . "\n";

// }


// $lieblingsEssen = "Pizza";

// if ($lieblingsEssen = "Ungesundes") {
//     print "Mhhh, lecker!";

// }
// elseif ($lieblingsEssen ==="Ungesund") {
//     print "Mhhh, lecker, aber ungesund!";

// }
// else {
//     print "Wahrscheinlich gesund";

// }


// $land = "Syrien";

// switch ($land) {
//     case "Syrien":
//         print "Damaskus" . PHP_EOL;
//         break;
//     case "Russland":
//         print "Moskau" . PHP_EOL;
//         break;
//     case "Ukraine":
//         print "Kiew" . PHP_EOL;
//         break;
//     case "Kamerun":
//         print "Yaoundé" . PHP_EOL;
//         break;
//     case "Deutschland":
//         print "Berlin" . PHP_EOL;
//         break;
//     default:
//         print "Sorry, dieses Land ist nicht mit im Videocall." . PHP_EOL;
// }


// $land = "Syrien";

// $hauptstadt = match($land) {
//         "Syrien" => "Damaskus",
//         "Russland" => "Moskau",
//         "Ukraine" => "Kiew",
//         "Kamerun" => "Yaounde",
//         "Deutschland" => "Berlin",
//         default => "Sorry, dieses Land ist nicht mit im Videocall."

// }; -->

function which_is_smaller($n1, $n2) {
        if ($n1 < $n2) {
            return $n1;
        }
        else {
            return $n2;

        }
}
print which_is_smaller (0.5, 0.25) . PHP_EOL;


function which_is_smaller(int $n1, int $n2): string {
    if ($n1 == $n2) {
        return "Die Zahlen sind gleich groß";
    } elseif($n1 < $n2) {
        return $n1;
    }
    else {
        return $n2;
    }
}

print which_is_smaller(13,13) . PHP_EOL;










