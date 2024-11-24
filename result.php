<?php
session_start();
if (!isset($_SESSION['data'])) {
    die("Tidak ada data untuk ditampilkan!");
}
$data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Hasil Pendaftaran</h2>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($data['name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($data['email']) ?></td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td><?= htmlspecialchars($data['phone']) ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?= htmlspecialchars($data['age']) ?></td>
        </tr>
        <tr>
            <th>Browser/OS</th>
            <td><?= htmlspecialchars($data['browser']) ?></td>
        </tr>
    </table>

    <button type="button" style="display: block; margin: 20px auto;">
        <a href="form.php">Kembali ke Form</a>
    </button>

    <h3 style="text-align: center;">Isi File</h3>
    <table>
        <tr>
            <th>Baris</th>
            <th>Konten</th>
        </tr>
        <?php foreach ($data['fileContent'] as $index => $line): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($line) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
