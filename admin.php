<?php
include 'koneksi.php';

// Fitur Update Status Penanganan
if (isset($_POST['update_status'])) {
    $id_laporan = $_POST['id_laporan'];
    $status_baru = $_POST['status_penanganan'];

    $update_query = "UPDATE laporan_gangguan SET status_penanganan='$status_baru' WHERE id='$id_laporan'";
    mysqli_query($koneksi, $update_query);
    echo "<script>alert('Status pengaduan berhasil diperbarui!'); window.location.href='admin.php';</script>";
}

// Ambil Seluruh Data Pengaduan
$result = mysqli_query($koneksi, "SELECT * FROM laporan_gangguan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - PLTD Mindiptana</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f9; margin: 0; padding: 20px; }
        .container { max-width: 1100px; margin: 0 auto; background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        h2 { color: #005288; border-bottom: 2px solid #0082c8; padding-bottom: 10px; margin-top: 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 0.9rem; }
        th, td { padding: 12px; border: 1px solid #cbd5e1; text-align: left; }
        th { background-color: #005288; color: white; }
        tr:nth-child(even) { background-color: #f8fafc; }
        .badge { padding: 4px 10px; border-radius: 6px; font-weight: bold; font-size: 0.8rem; color: white; display: inline-block; }
        .badge-menunggu { background-color: #ef4444; }
        .badge-diproses { background-color: #f59e0b; }
        .badge-selesai { background-color: #10b981; }
        select, button { padding: 6px 10px; border-radius: 6px; border: 1px solid #cbd5e1; font-size: 0.85rem; }
        button { background-color: #0082c8; color: white; border: none; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #005288; }
    </style>
</head>
<body>

<div class="container">
    <h2>🛠️ Panel Kelola Pengaduan Warga — PLTD Mindiptana</h2>
    <p>Daftar seluruh laporan gangguan listrik yang masuk dari masyarakat.</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pelapor</th>
                <th>No. HP</th>
                <th>Lokasi</th>
                <th>Kategori & Gejala</th>
                <th>Catatan</th>
                <th>Status Saat Ini</th>
                <th>Aksi Petugas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                $status_class = 'badge-menunggu';
                if ($row['status_penanganan'] == 'Diproses') $status_class = 'badge-diproses';
                if ($row['status_penanganan'] == 'Selesai') $status_class = 'badge-selesai';
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= date('d/m/Y H:i', strtotime($row['tanggal_lapor'])); ?></td>
                <td><strong><?= htmlspecialchars($row['nama_pelapor']); ?></strong></td>
                <td><?= htmlspecialchars($row['no_hp']); ?></td>
                <td><?= htmlspecialchars($row['lokasi']); ?></td>
                <td><b><?= htmlspecialchars($row['kategori']); ?></b><br><small><?= htmlspecialchars($row['gejala']); ?></small></td>
                <td><?= htmlspecialchars($row['catatan']); ?></td>
                <td><span class="badge <?= $status_class; ?>"><?= htmlspecialchars($row['status_penanganan']); ?></span></td>
                <td>
                    <form action="admin.php" method="POST" style="display: flex; gap: 5px;">
                        <input type="hidden" name="id_laporan" value="<?= $row['id']; ?>">
                        <select name="status_penanganan">
                            <option value="Menunggu" <?= $row['status_penanganan'] == 'Menunggu' ? 'selected' : ''; ?>>Menunggu</option>
                            <option value="Diproses" <?= $row['status_penanganan'] == 'Diproses' ? 'selected' : ''; ?>>Diproses</option>
                            <option value="Selesai" <?= $row['status_penanganan'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                        </select>
                        <button type="submit" name="update_status">Ubah</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>