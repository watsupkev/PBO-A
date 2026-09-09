<?php

declare(strict_types=1);

class KarakterGame
{
    private string $nama;
    private int $hp;
    private int $level;

    // Constructor
    public function __construct(
        string $nama,
        int $hp,
        int $level
    ) {
        if ($hp < 0) {
            throw new InvalidArgumentException(
                "HP tidak boleh kurang dari 0"
            );
        }

        if ($level < 1) {
            throw new InvalidArgumentException(
                "Level tidak boleh kurang dari 1"
            );
        }

        $this->nama = $nama;
        $this->hp = $hp;
        $this->level = $level;
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

    // Method menerima damage
    public function terimaDamage(int $damage): void
    {
        if ($damage <= 0) {
            throw new InvalidArgumentException(
                "Damage harus lebih dari 0"
            );
        }

        $this->hp -= $damage;

        if ($this->hp < 0) {
            $this->hp = 0;
        }
    }

    // Method menampilkan karakter
    public function tampilkan(): void
    {
        echo "Nama  : " . $this->nama . PHP_EOL;
        echo "HP    : " . $this->hp . PHP_EOL;
        echo "Level : " . $this->level . PHP_EOL;
    }
}
