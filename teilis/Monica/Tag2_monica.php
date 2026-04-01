<!-- <?php
/*
Aufgabe: Schreiben Sie eine ===Funktion===, die den Namen einliest und diesen 
dann mit "Hallo,  <Name>! begrüßt.
*/

$name = "Monica";
print "Hallo, $name\n";

function greeter($greeting = "Hallo") {
    $name = readline("Geben Sie bitte Ihren Namen ein: ");
    print "$greeting, $name!" . PHP_EOL;

}
greeter ();
greeter("Hallo");
greeter("Moin");
greeter("Willkommen");




/*
Aufgabe: Schreiben Sie eine Funktion, die ein Wort einliesst und prüft, ob
dieses ein Palindrom ist.
Antworten Sie mit einem entsprechenden Text.
*/

$wort = "Kodierung";
print "$wort\n";


function Palindrom_Checker() {
$word = readline ("Kodierung");
    $isPalindrome = strtolower($word) === strtolower(strrev($word));

    if ($isPalindrome) {
        print "true" . "\n";

}
    else {
        print "false" . "\n";

}
  }




function is_palindrom(string $word): bool {

$lower= strtolower($word);
return $lower=== strrev($lower);
}
$input = readline("Bitte geben Sie ein Wort ein: ");

if (is_palindrom($input)) {
echo "Das Wort '$input' ist ein Palindrom." . PHP_EOL;
} else {
echo "Das Wort '$input' ist kein Palindrom." . PHP_EOL;
}

function palindromeChecker() {
$word = readline("Wort: ");
$isPalindrome = strtolower($word) === strrev(strtolower($word));

if ($isPalindrome) {
    print "Das ist ein Palindrom!";
}
else {
    print "Das ist kein Palindrom!";
}
// return brauchen wir hier nicht
}
palindromeChecker();

// Pure Funktion mit Parameter und Rückgabewer, ohne Seiteneffekte

function is_palindrom(string $word): bool {
$lower = strtolower($word);
return $lower === strrev($lower);
}

$input = readline("Bitte geben Sie ein Wort ein: ");

if (is_palindrom($input)) {
echo "Das Wort '$input' ist ein Palindrom." . PHP_EOL;
} else {
echo "Das Wort '$input' ist kein Palindrom." . PHP_EOL;
}

/*Schreiben Sie eine Funktion is_even_or_odd(int $num): string die für 
eine Zahl bestimmt, 
ob diese gerade oder ungerade ist.*/

function is_even_or_odd(int $num) {
    if ($num % 2 === 0) {
    echo "gerade";
} else {
    echo "ungerade";
}

}


function is_palindrom(string $word): bool {
    $lower = strtolower($word);
    return $lower === strrev($lower);
}

$input = "";
print "Tippen Sie 'Ende' um das Programm zubeenden.\n";

while (true) {
    $input = readline("Bitte geben Sie ein Wort ein: ");
    //Abbruchbedingung
    if ($input === "Ende") {
        // Schleife verlassen
        break;
    }

    if (is_palindrom($input)) {
        echo "Das Wort '$input' ist ein Palindrom." . PHP_EOL;
    } else {
        echo "Das Wort '$input' ist kein Palindrom." . PHP_EOL;
    }
}

for ($i = 0; $i <= 100000; $i++) {
    print "$i\n";
}


/*Schreiben Sie eine Funktion `isPrime(int $num): bool`, die
für eine Zahl $num zurückgibt, ob sie eine Primzahl ist oder nicht.

Primzahl = einen Zahl, die nur durch 1 und sich selbst restlos teilbar ist

Primzahlen: 2, 3, 5, 7, 11, 13, 17, ...*/

