<?php

/*
Zahlenratespiel
===============

Der Computer wählt zufällig eine Zahl zwischen 1 und 100 
und der Spieler muss diese Zahl erraten.

Sobald der Spieler die Zahl erraten hat, soll 
sich das Programm beenden.
*/

print "Ich denke an eine Zahl zwischen 1 und 100. Erraten Sie sie!\n";
$secret = rand(1, 100);

while (true) {
        $guess = readline("Ist die Zahl vielleicht: ");

            if ($guess > $secret) {
                    print "Ihre Zahl ist zu groß!\n";
                        }
                            elseif ($guess < $secret) { 
                            print "Ihre Zahl ist zu klein!\n";
                                }
                                    else {
                                        print "Sie haben die Zahl erraten 🎉\n";
                                        break;
                                            }
                                        }    