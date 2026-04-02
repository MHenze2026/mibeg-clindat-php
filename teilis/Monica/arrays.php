<!-- <?php


//Arrays

$animals = ["lion", "mole", "eagle"];
print var_dump($animals). PHP_EOL;
print count($animals). PHP_EOL;

array_push($animals, "tiger", "snake", "hamster");
$hamster = array_pop($animals);

// Mit Vorsicht benutzen!!!
unset ($animals [3]);

print var_dump(array_is_list($animals));

print var_dump($animals[0]);
$animals[0] = "mouse";
print var_dump($animals[0]);

// for ($i=0; $i < count($animals); $i++) {
//    print $animals[$i] . PHP_EOL;


// }

foreach ($animals as $animal){
        print $animal . PHP_EOL;

}


/*Schreiben Sie einen Code, der für das
untenstehende Array die Summe der enthaltenen
Zahlen bestimmt.
*/

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 
63, 75, 76, 73, 68, 
62, 73, 72, 65, 74, 62, 62, 65, 64, 
68, 73, 75, 79, 73];


echo "sum(a) = " . array_sum($numbers) . "\n";


/* Schreiben Sie eine Funktion, die einen String als Argument nimmt 
und die Spiegelung des String zurückgibt; 
also zum Beispiel soll aus Hallo dann ollaH werden. Sie dürfen strrev NICHT verwenden.

Hinweise:

Länge eines String bestimmen Sie mit strlen (https://www.php.net/manual/en/function.strlen.php)
Einzelne Buchstaben eines Strings können Sie—genau wie bei Arrays—mit eckigen Klammern ermitteln*/


$word= "Hallo";
$length = strlen($word);
echo $length. PHP_EOL;
for ($i = $length - 1; $i >= 0; $i--) {
echo $word[$i];}
echo PHP_EOL;



function mirror(string $word): string {
    $mirrored = "";
    for ($i = strlen($word)-1; $i >= 0; $i--) {
        $mirrored .= $word[$i];
    }
    return $mirrored;
} -->

$num = [34, 127, 45];


$animalSounds = [
        "lion" => "roar",
        "cat" => "meow",
        "dog" => "wuff"


];

foreach ($animalSounds as $key => $value) {
        print ("The $key makes: $value. \n");

}

print var_dump($animalSounds);
$animalSounds["lion"];

$people = [
        1234 => [
                "vorname" => "Stephan",
                "nachname" => "Max",
                "lieblingsessen" => "Thai-Curry"

        ],
        2334 => [
                "vorname" => "John",
                "nachname" => "Doe",
                "lieblingsessen" => "Pasta"    

        ]
]
print var_dump($people);

function sqr($num) {
    return $num * $num;
}

$numbers = [237, 29, 34, 12, 1245];

// foreach ($numbers as $number) {
//     print sqr($number) . PHP_EOL;
// }

array_map('sqr', $numbers);


/* Schreiben Sie ein Skript das zu einem Array der Zahlen 
[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73] 
das Maximum, Minimum und den Durchschnitt ermittelt. 
Nutzen Sie dazu lediglich eine höherwertige Funktion. 
(Tipp: array_reduce()) */



