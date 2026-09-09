# Tugas 1 PBO

## Domain

Domain yang gunakan dalam tugas ini adalah **Karakter Game**.

Karakter Game yang memiliki nama, HP, dan level. Karakter dapat melakukan serangan dan menerima damage.

## Class Utama

Class utama yang digunakan adalah 'KarakterGame'.

### Field

- 'nama: String'
- 'level: int'
- 'hp: int'

### Method

+ 'serang(damage)' digunakan untuk menyerang karakter
+ 'giliran()' digunakan untuk melihat berapa giliran
+ 'tampilkan()' digunakan untuk menampilkan status karakter

## Invariant

1. serang tidak boleh kurang dari 0 | demage > 0
2. HP tidak boleh kurang dari 0 | hp >= 0
3. giliran tidak bisa negatif | giliran >= 0


## Cara Menjalankan

### Java

```bash
javac KerakterGame.java Main.java
java Main
```

### PHP

```bash
php Main.php
```

## Deklarasi Penggunaan AI

Sejujurnya saya menggunakan AI untuk Membantu saya dalam membuat tugas PBO ini dikarenakan saya masih sangat sedikit memahami Java dan PHP. Saya menggunakan AI untuk memahami kode dan sistem program