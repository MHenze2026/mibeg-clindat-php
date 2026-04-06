<?php

/* 1. Schreiben Sie ein Skript das zu einem Array der Zahlen 78, 60, 62,
68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73,
72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 das Maximum, Minimum 
und den Durchschnitt ermittelt. Nutzen Sie dazu lediglich eine
höherwertige Funktion. (Tipp: array_reduce()!)*/


$zahlen = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73,
72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];


$max = max($zahlen);
$min = min($zahlen);
$durchschnitt = array_sum($zahlen) / count($zahlen);


print "Maximum:      " . $max . "\n";
print "Minimum:      " . $min . "\n";
print "Durchschnitt: " . $durchschnitt . "\n";


/* Schreiben Sie ein PHP-Skript, dass das JSON {"Title": "Sommer mit
Fremden", "Author": "Taichi Yamada", "Detail": {"Publisher":
"Goldmann"}} dekodiert und wie folgt ausgibt:

Title: Sommer mit Fremden
Author: Taichi Yamada
Publisher: Goldmann
*/


// Der JSON-String
$jsonString = '{"Title": "Sommer mit Fremden", "Author": "Taichi Yamada", 
"Detail": {"Publisher": "Goldmann"}}';


$data = json_decode($jsonString, true);

print "Title: " . $data['Title'] . "\n";
print "Author: " . $data['Author'] . "\n";
print "Publisher: " . $data['Detail']['Publisher'] . "\n";


