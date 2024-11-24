<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $file = $_FILES['file'];

    // Validasi data
    if (strlen($name) < 3 || !filter_var($email, FILTER_VALIDATE_EMAIL) || !is_numeric($phone) || strlen($phone) < 10 || $age < 18) {
        die("Data tidak valid!");
    }
    if ($file['type'] !== "text/plain" || $file['size'] > 1024 * 1024) {
        die("File tidak valid!");
    }

    // Membaca isi file
    $fileContent = file_get_contents($file['tmp_name']);
    $lines = explode("\n", trim($fileContent));

    // Browser dan OS
    $browser = $_SERVER['HTTP_USER_AGENT'];

    // Menyimpan data di session
    session_start();
    $_SESSION['data'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'age' => $age,
        'fileContent' => $lines,
        'browser' => $browser,
    ];

    header("Location: result.php");
    exit();
}
?>
