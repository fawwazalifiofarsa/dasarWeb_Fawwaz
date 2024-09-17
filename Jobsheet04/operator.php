<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a=$a, Nilai b=$b<br>";
echo "Hasil Tambah: $hasilTambah<br>";
echo "Hasil Kurang: $hasilKurang<br>";
echo "Hasil Kali: $hasilKali<br>";
echo "Hasil Bagi: $hasilBagi<br>";
echo "Sisa Bagi: $sisaBagi<br>";
echo "pangkat: $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b; 

echo "Apakah Hasil Sama: $hasilSama<br>";
echo "Apakah Hasil Tidak Sama: $hasilTidakSama<br>";
echo "Apakah Hasil Lebih Kecil: $hasilLebihKecil<br>";
echo "Apakah Hasil Lebih Besar: $hasilLebihBesar<br>";
echo "Apakah Hasil Lebih Kecil Sama: $hasilLebihKecilSama<br>";
echo "Apakah Hasil Lebih Besar Sama: $hasilLebihBesarSama<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: $hasilAnd<br>";
echo "Hasil Or: $hasilOr<br>";
echo "Hasil Not A: $hasilNotA<br>";
echo "Hasil Not B: $hasilNotB<br>";

$a += $b;
echo "Hasil a tambah b: $a<br>";
$a -= $b;
echo "Hasil a kurang b: $a<br>";
$a *= $b;
echo "Hasil a kali b: $a<br>";
$a /= $b;
echo "Hasil a bagi b: $a<br>";
$a %= $b;
echo "Hasil a modulus b: $a<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $hasilAnd<br>";
echo "Hasil Tidak Identik: $hasilOr<br>";

echo "Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?<br>";
$sisaPersenKursi = (45-28)/45*100;
echo "Presentase sisa kursi: $sisaPersenKursi%";
?>