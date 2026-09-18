<?php
include 'koneksi.php';

// Ambil Data Pengaduan Publik
$result = mysqli_query($koneksi, "SELECT * FROM laporan_gangguan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Listrik & Pengaduan - PLTD Mindiptana</title>
    <style>
        :root {
            --pln-blue: #0082c8;
            --pln-dark: #005288;
            --pln-yellow: #ffc107;
            --bg-body: #f4f7f9;
        }

        * { box-sizing: border-box; font-family: 'Segoe UI', -apple-system, sans-serif; margin: 0; padding: 0; }
        body { background-color: var(--bg-body); color: #2d3748; line-height: 1.6; }

        header { background-color: var(--pln-dark); color: white; position: sticky; top: 0; z-index: 1000; }
        .header-top { max-width: 900px; margin: 0 auto; padding: 12px 20px; display: flex; justify-content: space-between; align-items: center; }
        .logo-box { display: flex; align-items: center; gap: 10px; }
        .logo-icon { background: var(--pln-yellow); color: var(--pln-dark); width: 36px; height: 36px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: bold; }
        .logo-text h1 { font-size: 1.15rem; color: #ffffff; }
        .logo-text span { color: var(--pln-yellow); font-size: 0.85rem; }

        .main-nav { background-color: #003e68; }
        .nav-container { max-width: 900px; margin: 0 auto; display: flex; overflow-x: auto; white-space: nowrap; }
        .nav-container a { color: #d0e7ff; text-decoration: none; padding: 12px 18px; font-size: 0.9rem; font-weight: 600; }
        .nav-container a.active { color: #ffffff; border-bottom: 3px solid var(--pln-yellow); }

        .page-banner { background: linear-gradient(135deg, #005288 0%, #0082c8 100%); color: white; padding: 25px 20px 35px; text-align: center; }

        .main-container { max-width: 900px; margin: 20px auto 40px; padding: 0 16px; }

        .card-status { background: white; border-radius: 12px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; font-size: 0.88rem; }
        th, td { padding: 10px 12px; border-bottom: 1px solid #e2e8f0; text-align: left; }
        th { background-color: #f1f5f9; color: var(--pln-dark); font-weight: 700; }

        .badge { padding: 4px 10px; border-radius: 6px; font-weight: bold; font-size: 0.78rem; color: white; display: inline-block; }
        .badge-menunggu { background-color: #ef4444; }
        .badge-diproses { background-color: #f59e0b; }
        .badge-selesai { background-color: #10b981; }

        footer { background-color: #0f172a; color: #94a3b8; text-align: center; padding: 20px; font-size: 0.82rem; margin-top: 40px; }
    </style>
</head>
<body>

    <header>
        <div class="header-top">
            <div class="logo-box">
                <div class="logo-icon">⚡</div>
                <div class="logo-text">
                    <h1>PLN <span>PLTD Mindiptana</span></h1>
                </div>
            </div>
        </div>

        <nav class="main-nav">
            <div class="nav-container">
                <a href="index.html">🏠 Beranda</a>
                <a href="status.php" class="active">💡 Status Listrik</a>
                <a href="jadwal.html">📅 Jadwal Perbaikan</a>
                <a href="pengaduan.php">📝 Lapor Lampu Mati</a>
                <a href="profil.html">🏢 Profil PLTD</a>
            </div>
        </nav>
    </header>

    <section class="page-banner">
        <h2>Daftar & Status Penanganan Pengaduan Warga</h2>
        <p>Pantau laporan gangguan listrik di wilayah Distrik Mindiptana secara transparan</p>
    </section>

    <main class="main-container">
        <div class="card-status">
            <h3>📋 Laporan Masuk Terbaru</h3>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Pelapor</th>
                        <th>Lokasi</th>
                        <th>Kendala</th>
                        <th>Status Penanganan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { 
                        $status_class = 'badge-menunggu';
                        if ($row['status_penanganan'] == 'Diproses') $status_class = 'badge-diproses';
                        if ($row['status_penanganan'] == 'Selesai') $status_class = 'badge-selesai';
                    ?>
                    <tr>
                        <td><?= date('d/m/Y H:i', strtotime($row['tanggal_lapor'])); ?></td>
                        <td><b><?= htmlspecialchars($row['nama_pelapor']); ?></b></td>
                        <td><?= htmlspecialchars($row['lokasi']); ?></td>
                        <td><?= htmlspecialchars($row['kategori']); ?> (<?= htmlspecialchars($row['gejala']); ?>)</td>
                        <td><span class="badge <?= $status_class; ?>"><?= htmlspecialchars($row['status_penanganan']); ?></span></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p><strong>PLN PLTD Distrik Mindiptana</strong></p>
    </footer>

</body>
</html>