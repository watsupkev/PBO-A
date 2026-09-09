<?php

require_once "KarakterGame.php";

$hero = new KarakterGame(
    "Knight",
    100
);

$hero->tampilkan();

$hero->serang(10);
$hero->giliran();

echo PHP_EOL;
echo "Setelah giliran:" . PHP_EOL;
$hero->tampilkan();

echo PHP_EOL;
echo "Percobaan tidak sah 1:" . PHP_EOL;

try {
    $hero->serang(-10);
} catch (InvalidArgumentException $e) {
    echo "Ditolak: " . $e->getMessage() . PHP_EOL;
}

echo PHP_EOL;
echo "Percobaan tidak sah 2:" . PHP_EOL;

try {
    $hero->serang(0);
} catch (InvalidArgumentException $e) {
    echo "Ditolak: " . $e->getMessage() . PHP_EOL;
}
