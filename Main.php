<?php
require_once "KarakterGame.php";

$hero = new KarakterGame(
    "Knight",
    100,
    1
);
$hero->tampilkan();

$hero->serang(20);
$hero->terimaDamage(20);
echo PHP_EOL;
echo "Setelah menerima damage:" . PHP_EOL;
$hero->tampilkan();

echo PHP_EOL;
echo "Percobaan tidak sah 1:" . PHP_EOL;
try {
    $hero->terimaDamage(-10);
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
