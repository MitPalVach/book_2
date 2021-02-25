<?php

const BR = '<br>';
const HR = '<hr>';

echo BR;
echo HR;
// =====================================================================================================================

## Демонстрация работы со списками.
$namesList[0] = "Yuen Wo Ping";
$namesList[1] = "Geofrey Darrow";
$namesList[2] = "Hugo Weaving";
echo "А вот первый элемент массива: " . $namesList[0] . BR;
// Печатаем в цикле все элементы массива.
for ($i = 0; $i < count($namesList); $i++) {
    echo $namesList[$i] . BR;
}


echo BR;
echo HR;
// =====================================================================================================================

##  Массивы-константы
define('DOSSIER', [
    'Anderson' => ['name' => 'Thomas', 'born' => '1962-03-11'],
    'Reeves' => ['name' => 'Keanu', 'born' => '1962-09-02'],
]);
echo DOSSIER['Anderson']['name']; // Thomas


echo BR;
echo HR;
// =====================================================================================================================


##  Перебор списка
$dossier = [
    ['name' => 'Thomas Anderson', 'born' => '1962-03-11'],
    ['name' => 'Keanu Reeves', 'born' => '1962-09-02'],
];
for ($i = 0; $i < count($dossier); $i++) {
    echo "{$dossier[$i]['name']} was born {$dossier[$i]['born']}";
}


echo BR;
echo HR;
// =====================================================================================================================


## Перебор ассоциативного массива.
$birth = [
    "Thomas Anderson" => "1962-03-11",
    "Keanu Reeves" => "1962-09-02",
];
for (reset($birth); ($k = key($birth)); next($birth)) {
    echo "$k родился {$birth[$k]}<br />";
}

echo BR;
echo HR;
// =====================================================================================================================


## Цикл перебирает копию массива, а не оригинал.
$numbers = [101, 314, 606];
foreach ($numbers as $v) $v++; {
    echo "Элементы массива: ";
}
foreach ($numbers as $elt) {
    echo $elt;
}
echo BR;
## Изменение элементов при переборе.
$numbers = [100, 313, 605];
foreach ($numbers as &$v) {
    $v++;
}
echo "Элементы массива: ";
foreach ($numbers as $elt) {
    echo "$elt ";
}

















