<?php
include 'koneksi.php';

// Query SQL untuk menggabungkan tabel orders dan room_types
$sql = "SELECT orders.*, room_types.room_name FROM orders 
        JOIN room_types ON orders.room_type_id = room_types.id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <?php include "layout/navbar.php" ?>

    <div class="container">
        <h1 class="text-center mb-3">Riwayat Pesanan</h1>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>Nama</th>
                    <th>Tipe Kamar</th>
                    <th>Tanggal Pesanan</th>
                    <th>Durasi (Hari)</th>
                    <th>Include Makan</th>
                    <th>Total Bayar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- menampilkan data pesanan -->
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nama_pemesan']) ?></td>
                        <td><?= htmlspecialchars($row['room_name']) ?></td>
                        <td><?= htmlspecialchars($row['tanggal_pesanan']) ?></td>
                        <td><?= htmlspecialchars($row['durasi']) ?></td>
                        <td class="text-center"><?= $row['termasuk_makan'] ? 'Ya' : 'Tidak' ?></td>
                        <td>Rp. <?= number_format($row['total_harga'], 0, ',', '.') ?></td>
                        <td class="text-center">
                            <a href="detail_pesanan.php?id=<?= $row['id'] ?>" class="btn btn-view btn-sm">Lihat</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
