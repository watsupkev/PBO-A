<?php

declare(strict_types=1);

class KarakterGame
{
    private string $nama;
    private int $hp;
    private int $giliran;

    // Constructor
    public function __construct(
        string $nama,
        int $hp
    ) {
        if ($hp < 0) {
            throw new InvalidArgumentException(
                "HP tidak boleh kurang dari 0"
            );
        }

        $this->nama = $nama;
        $this->hp = $hp;
        $this->giliran = 0;
    }

    // Method serang
    public function serang(int $damage): void
    {
        if ($damage <= 0) {
            throw new InvalidArgumentException(
                "Damage harus lebih dari 0"
            );
        }

        echo $this->nama .
            " menyerang dengan damage " .
            $damage . PHP_EOL;
    }

    // Method menghitung giliran
    public function giliran(): void
    {
        $this->giliran++;

        echo "Giliran ke-" .
            $this->giliran . PHP_EOL;
    }

    // Method menampilkan karakter
    public function tampilkan(): void
    {
        echo "Nama    : " . $this->nama . PHP_EOL;
        echo "HP      : " . $this->hp . PHP_EOL;
        echo "Giliran : " . $this->giliran . PHP_EOL;
    }
}
