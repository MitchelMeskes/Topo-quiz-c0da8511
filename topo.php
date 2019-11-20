<?php

$goed = 0;
$fout = 0;


$alles = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"

);

foreach ($alles as $land=>$stede){
    echo "Wat is he hooftstad van: $land".PHP_EOL;
    $ant = readline();

    if ($ant === $stede){
        echo "Goed!".PHP_EOL;
        $goed++;
    }
    else {
        echo "Helaas, $ant is niet de hoofdstad van $land.".PHP_EOL;
        echo "Het goeden antwoord is: $stede".PHP_EOL;
        $fout++;
    }
}

echo "Je hebt $goed van de 10 goed".PHP_EOL;
echo "Je hebt $fout van de 10 fout".PHP_EOL;