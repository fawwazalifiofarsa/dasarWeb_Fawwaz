<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower(end(explode(".", $_FILES['file']['name'])));

    $extensions = array("jpg", "jpeg", "png", "gif");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode("", $errors);
    }
}
?>