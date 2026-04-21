<?php

/**
 * 1. Set a random word $targetWord
 * 2. Welcome the player to the game
 * 3. Start loop
 *      a) Ask the player for a word $guessedWord
 *      b) Check each letter of #guessedWord whether
 *            i. It is in $targetWord and at the correct spot => 🟢
 *           ii. It is in $targetWord but in the wrong spot => 🟠
 *          iii. It is not in $targetWord at all => ⚫
 *      c) Are all letters correct? => break out of the loop
 * 4. Let the player know they won
 */

$targetWord = "horse";

// Core game LOOP
do {
    // When does the player win the game?
    $success = true;
    // Get the player’s input
    $guessedWord = strtolower(readline("Type in a word: "));
    // Empty array to construct the feedback for the player
    $result = [];

    // Check every letter
    for ($i=0; $i < strlen($guessedWord); $i++) {

        // Letter is in the correct spot
        if ($guessedWord[$i] === $targetWord[$i]) {
            // Remember: This is how you add an element to an array
            // You could also use array_push()
            $result[] = "🟢";
            continue;
        }

        // At least one letter is not in the correct spot
        // => that means, the game is NOT won
        $success = false;

        // Letter is part of the word, but not in that spot
        if (str_contains($targetWord, $guessedWord[$i])) {
            $result[] = "🟠";
            continue;
        }

        // Letter is not in the word at all
        $result[] = "⚫";
    }

    print implode(" ", $result) . "\n";

// If the player has not won yet, we take another loop
} while (!$success);

<?php

$words = file("./data/wordlist-english.txt");
$targetWord = trim(strtolower($words[rand(0, count($words)-1)]));

define("MAX_TRIES", 6);
$tryNum = 1;

define("OFFSET", ord("a"));
$possible_letters = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
    "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
];
$correct_letters = [];
$contained_letters = [];

/**
 * 1. Set a random word $targetWord
 * 2. Welcome the player to the game
 * 3. Start loop
 *      a) Ask the player for a word $guessedWord
 *      b) Check each letter of #guessedWord whether
 *            i. It is in $targetWord and at the correct spot => 🟢
 *           ii. It is in $targetWord but in the wrong spot => 🟠
 *          iii. It is not in $targetWord at all => ⚫
 *      c) Are all letters correct? => break out of the loop
 * 4. Let the player know they won
 */

print <<<EOT
\n=====================================
========   Welcome to WORDLE   ========
=====================================\n

EOT;

// Core game LOOP
do {
    // When does the player win the game?
    $success = true;
    // Get the player’s input
    $guessedWord = strtolower(readline("Try {$tryNum}/" . MAX_TRIES . ". Type in a word: "));
    // Empty array to construct the feedback for the player
    $result = [];

    // Check every letter
    for ($i=0; $i < strlen($guessedWord); $i++) {
        $key = ord($guessedWord[$i]) - OFFSET;

        // Letter is in the correct spot
        if ($guessedWord[$i] === $targetWord[$i]) {
            // Remember: This is how you add an element to an array
            // You could also use array_push()
            $result[] = "🟢";
            $correct_letters[$key] = strtoupper($guessedWord[$i]);
            unset($possible_letters[$key]);
            unset($contained_letters[$key]);
            continue;
        }

        // At least one letter is not in the correct spot
        // => that means, the game is NOT won
        $success = false;

        // Letter is part of the word, but not in that spot
        if (str_contains($targetWord, $guessedWord[$i])) {
            $result[] = "🟠";
            $contained_letters[$key] = strtoupper($guessedWord[$i]);
            unset($possible_letters[$key]);
            continue;
        }

        // Letter is not in the word at all
        $result[] = "⚫";
        unset($possible_letters[$key]);
    }

    print implode(" ", $result) . "\n";

    print "Remaining letters: " . implode(", ", $possible_letters) . PHP_EOL;
    if ($contained_letters) {
        print "🟠 " . implode(", ", $contained_letters) . PHP_EOL;
    }
    if ($correct_letters) {
        print "🟢 " . implode(", ", $correct_letters) . PHP_EOL;
    }
    print PHP_EOL;
    $tryNum++;

// If the player has not won yet, we take another loop
} while (!$success && $tryNum <= MAX_TRIES);

if (!$success) {
    print <<<EOT
=======================================
=== Too bad! The word was '$targetWord'. ===
=======================================

EOT;
}
else {
    print <<<EOT
=====================================
=======   Congratulations!!   =======
=====================================

EOT;
}

<?php

   $spieler = readline ("Wenn dein Vorname kein Geheimnis ist, tipp bitte deinen Namen ein.");
 
                  $filename = "wortelist.txt";// 2. Erstellung $secret_array
                  /* if (file_exists($filename)) {
                      echo "gefunden"; 
                      } else {
                          echo "Fehler";
                          }
                           */
                           $secret_array = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //Datei in Array einlesen
                           $secret_array = array_map('strtolower', $secret_array);//Normalisierung

                           //echo var_dump (count ($secret_array));

                           $randomKey = array_rand($secret_array); //wählen random key
                           $secret_word = $secret_array[$randomKey];

                           print $secret_word. PHP_EOL;

                           $guessWord = strtolower (readline ("Tipp bitte dein Wort mit 5 Buchstaben ein:"));// alle zum lowercase

                           if (strlen ($guessWord) !== strlen ($secret_word)) {
                               echo "Schade" . PHP_EOL;
                               }
                               else {
                                 for ($i = 0; $i < 5; $i++) {
                                   $guessLetter = $guessWord[$i]; // überprüfen posizion und buchstabe
                                    $secretLetter = $secret_word [$i];
                               
                                       if ($guessLetter === $secretLetter ){
                                           echo "\033[32m" . $guessLetter . "\033[0m"; //echo "gut gemacht";
                                           } 
                                           elseif  (str_contains ($secret_word, $guessLetter)) {
                                            echo "\033[3m" . $guessLetter . "\033[0m";
                                            }
                                            else {echo "\033[31m" . $guessLetter . "\033[0m";   
                                        
                                           

                                           }
                                           
                                       }
                                       echo PHP_EOL;



                               }










                            <?php
/* ein kleines wordle-spiel */

print "Welcome to the Wordle Game!" . PHP_EOL;

$system_word = "Apple"; //define a  fixed word for testing

$guestword = readline("Enter your guest wor/ add a gd: ");  //get user input

$matchingLetters = []; //an empty  array to store the results of the letter comparison
$len= strlen($system_word); // get the length of the system word 
for ($i = 0; $i < $len; $i++) { 

// loop through each letter of the system word 
// check if the letter exists in the system word and is in the correct position
//add green circle to the matchingLetters array if the letter is in the system_word and in the correct position
    if ( str_contains(strtolower($system_word),strtolower($guestword[$i] )) 
        && strtolower($system_word[$i]) === strtolower($guestword[$i])) { 
        $matchingLetters[] = "🟢"; 
    }

// look through each letter of the system_word 
// check if the letter exists in the system_word but is not in the correct position
//add yellow circle to the matchingLetters array if the letter is in the system_word and in the correct position
    elseif ( str_contains(strtolower($system_word),strtolower($guestword[$i] )) 
        && strtolower($system_word[$i]) !== strtolower($guestword[$i])) {
        $matchingLetters[] = "🟡";

    }
// if the letter does not exist in the system_word add a red circle to the matchingLetters array
    else {
            $matchingLetters[] = "🔴";
        }
}

print "Matching letters: " . implode("", $matchingLetters) . PHP_EOL;
?>


<?php

function checkWord($nwort, $guess) {
    $antwort = "";
    for ($x = 0; $x < strlen($guess); $x++) {
        if ($nwort[$x] === $guess[$x]) {
            $antwort .= " $nwort[$x]";
        }
        elseif (str_contains($guess, $nwort[$x])) {
            $antwort .= " 🟨";
        }
        else {
            $antwort .= " ❌"; 
        }
    }

    return $antwort;
}

print "  **************************\n  ** Willkommen in Wordle **\n  **************************\n " ;
$worter = [
"april"     => "Es ist ein Monat im Jahr (5 Buchstaben)",
"brezel"    => "Ein beliebtes deutsches Gebäck (6 Buchstaben)",
"aprikose"  => "Eine gelb-orange Frucht, die im Sommer wächst (7 Buchstaben)",
"gladiator" => "Ein berühmter historischer Actionfilm aus Hollywood (9 Buchstaben)",
"seppuku"   => "Ein ritueller Selbstmord der Samurai im alten Japan (7 Buchstaben)",
];

$keys = array_keys($worter);
$lvl = (int)readline("Bitte wählen Sie den Schwierigkeitsgrad (1-5): :") - 1;
$guess = $keys[$lvl];
$hint = $worter[$guess];

print " Hinweis :" . $hint . PHP_EOL ;

for ($i=0; $i < 6 ; $i++) {
    $nwort = strtolower((string)readline(" Der wort ist: "));
    if (strlen($nwort)!== strlen($guess)) {
        print " Geben Sie ein Wort mit " . strlen($guess) . " Buchstaben bitte ein\n";
    }
    elseif ($nwort === $guess) {
        print "Wunderbar, du hast es geschafft. 😃\n";
        break;
    }
    else {
        print checkWord($nwort, $guess) . PHP_EOL;
    }
    if ($i === 5) {
        print "Leider sind deine Versuche aufgebraucht. 😢" . PHP_EOL ;
    }
}

