<?php

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
Funktion Primzahl:
<?php
/*Schreiben Sie eine Funktion `isPrime(int $num): bool`, die
für eine Zahl $num zurückgibt, ob sie eine Primzahl ist oder nicht.
Primzahl = einen Zahl, die nur durch 1 und sich selbst restlos teilbar ist
Primzahlen: 2, 3, 5, 7, 11, 13, 17 */

$num=4; //Zahlen eintippen

function isPrime(int $num): bool { 

for ($i=2; $i< $num; $i++) { //Start bei 2, Loop läuft bis $num-1, Durchlauf Erhöhung
    if ($num % $i === 0) { // Modulo-Check: Zahl restlos teilbar
        return false; //wenn die Zahl restlos teilbar ist, dann keine Primzahl
    }
}
return true; //keinen Teiler gefunden, daher Primzahl
}

var_dump(isPrime($num));
?>
andere Kodierung für Primzahlen:
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    $root = sqrt($num);
    for ($i=2; $i < $root; $i++) { 
        if ($num % $i === 0) {
            return false;
        }    
    }

    return true;
}

while (true) {
    $num = readline("Primzahl? ");
    print isPrime($num) ? "Ja.\n" : "Nein.\n";
}