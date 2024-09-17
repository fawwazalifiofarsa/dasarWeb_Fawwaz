<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<br>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";

echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);
array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);
$totalNilai = array_sum($nilaiSiswa);
$rataRata = $totalNilai / count($nilaiSiswa);

echo "<br>";
echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";

echo "<br><br>";

echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.";

echo "<br>";

$hargaAwal = 120000; 
$diskonPersen = 20;
$minimalDiskon = 100000; 
if ($hargaAwal >= $minimalDiskon) {
    $diskonRupiah = ($hargaAwal * $diskonPersen) / 100;
    $hargaSetelahDiskon = $hargaAwal - $diskonRupiah;

    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
} else {
    echo "Tidak ada diskon. Harga tetap Rp " . number_format($hargaAwal, 0, ',', '.');
}

echo "<br><br>";

echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)";

echo "<br>";

$skorPemain = 600;
$batasHadiah = 500;
$totalSkor = $skorPemain;
if ($totalSkor > $batasHadiah) {
    $hadiah = "YA";
} else {
    $hadiah = "TIDAK";
}

echo "Total skor pemain adalah: " . $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah;
?>