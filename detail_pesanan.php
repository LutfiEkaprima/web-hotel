<?php
include 'koneksi.php';

// Mendapatkan ID dari parameter URL
$order_id = isset($_GET['id']) ? $_GET['id'] : null;

if ($order_id) {
    // Query untuk mendapatkan detail pesanan berdasarkan ID
    $sql = "SELECT orders.*, room_types.room_name 
            FROM orders 
            JOIN room_types ON orders.room_type_id = room_types.id 
            WHERE orders.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $order_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $order = $result->fetch_assoc();
    $stmt->close();

    // Menghitung diskon jika durasi lebih dari 3 hari
    $diskon = 0;
    if ($order['durasi'] > 3) {
        $diskon = $order['total_harga'] * 0.1; // 10% dari total harga
    }
} else {
    echo "<script>alert('Pesanan tidak ditemukan'); window.location.href = 'riwayat.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <?php include "layout/navbar.php" ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Detail Pesanan</h2>
            </div>
            <div class="card-body">
                <p><strong>Nama Pemesan:</strong> <?= htmlspecialchars($order['nama_pemesan']) ?></p>
                <p><strong>Nomor Identitas:</strong> <?= htmlspecialchars($order['nomor_identitas']) ?></p>
                <p><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($order['jenis_kelamin']) ?></p>
                <p><strong>Tipe Kamar:</strong> <?= htmlspecialchars($order['room_name']) ?></p>
                <p><strong>Tanggal Pesanan:</strong> <?= htmlspecialchars($order['tanggal_pesanan']) ?></p>
                <p><strong>Durasi:</strong> <?= htmlspecialchars($order['durasi']) ?> hari</p>
                <p><strong>Termasuk Makan:</strong> <?= $order['termasuk_makan'] ? 'Ya' : 'Tidak' ?></p>
                <p><strong>Total Harga:</strong> Rp. <?= number_format($order['total_harga'], 0, ',', '.') ?></p>
                <p><strong>Diskon:</strong> <?= $diskon > 0 ? 'Rp. ' . number_format($diskon, 0, ',', '.') : '-' ?></p>

                <a href="riwayat.php" class="btn btn-back">Kembali ke Riwayat</a>
            </div>
        </div>
    </div>

</body>

</html>
