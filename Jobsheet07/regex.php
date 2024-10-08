<?php  
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";
$pattern = '/[0-9]/'; // Cocokkan angka
$text = 'Hello123World';

if (preg_match($pattern, $text)) {
    echo "Ada angka dalam teks.";
} else {
    echo "Tidak ada angka dalam teks.";
}

echo "<br>";
$pattern = '/apple/';
$replacement = 'banana';

$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text; // Output: "I like banana 1  pie."

echo "<br>";
$pattern = '/go{2,4}d/';
$text = 'god is good. gooood is not good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>