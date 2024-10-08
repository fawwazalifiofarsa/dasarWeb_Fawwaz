<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

if (empty($input)) {
    echo "Input tidak boleh kosong.";
} else {
    $max_length = 100;
    $input = substr($input, 0, $max_length);
    echo "<div>" . $input . "</div>";
}
echo "<br>";
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email $email valid!";
} else {
    echo "Email tidak valid. Silakan masukkan email yang benar.";
}
?>