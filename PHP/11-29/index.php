<?php

$daysOfWeek = [
    'lt' => [
        0 => 'sekmadienis',
        1 => 'pirmadienis',
        2 => 'antradienis',
        3 => 'trečiadienis',
        4 => 'ketvirtadienis',
        5 => 'penktadienis',
        6 => 'šeštadienis',
        'text' => 'Šiandien yra '
    ],
    'en' => [
        0 => 'sunday',
        1 => 'monday',
        2 => 'tuesday',
        3 => 'wednesday',
        4 => 'thursday',
        5 => 'friday',
        6 => 'saturday',
        'text' => 'Today is '
    ]
];

$firstDay = $daysOfWeek['lt'][1];
$thirdDay = $daysOfWeek['en'][3];


//echo "Pirma savaitės diena yra {$firstDay}<br>";
//echo "Third day of the week is {$thirdDay}<br>";


$lang = 'lt';

    $today = date('w');

    var_dump($today);

if ($lang === 'lt' || $lang === 'en') {
    $today = date('w');
    $result = $daysOfWeek[$lang]['text'] . $daysOfWeek[$lang][$today];
} else {
    $result = 'Incorrect language established!';
}

//echo $result;