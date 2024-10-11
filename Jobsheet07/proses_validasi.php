<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = [];

    // Validasi nama
    if (empty($nama)) {
        $errors["nama"] = "Nama harus diisi.";
    }

    // Validasi email
    if (empty($email)) {
        $errors["email"] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Format email tidak valid.";
    }

    // Validasi password
    if (empty($password)) {
        $errors["password"] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors["password"] = "Password minimal 8 karakter.";
    }

    // Jika ada kesalahan, kembalikan JSON
    if (!empty($errors)) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'errors' => $errors
        ]);
        exit;
    } else {
        echo "Data berhasil dikirim: Nama $nama, Email $email";
    }
}
?>