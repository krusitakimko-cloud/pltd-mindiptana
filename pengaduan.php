<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Lampu Mati - PLN PLTD Mindiptana</title>
    <style>
        :root {
            --pln-blue: #0082c8;
            --pln-dark: #005288;
            --pln-yellow: #ffc107;
            --bg-body: #f4f7f9;
        }

        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-body);
            color: #2d3748;
            line-height: 1.6;
        }

        .papan-pengumuman {
            background: linear-gradient(90deg, #b71c1c, #d32f2f);
            color: #ffffff;
            padding: 8px 15px;
            font-size: 0.88rem;
            font-weight: 600;
        }

        header {
            background-color: var(--pln-dark);
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .header-top {
            max-width: 900px;
            margin: 0 auto;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            background: var(--pln-yellow);
            color: var(--pln-dark);
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .logo-text h1 {
            font-size: 1.15rem;
            line-height: 1.1;
            color: #ffffff;
        }

        .logo-text span {
            color: var(--pln-yellow);
            font-size: 0.85rem;
            font-weight: 500;
        }

        .tag-wilayah {
            background-color: rgba(255,255,255,0.15);
            color: #ffffff;
            font-size: 0.75rem;
            padding: 4px 10px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .main-nav {
            background-color: #003e68;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .nav-container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
        }

        .nav-container a {
            color: #d0e7ff;
            text-decoration: none;
            padding: 12px 18px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            transition: all 0.2s;
            border-bottom: 3px solid transparent;
        }

        .nav-container a:hover,
        .nav-container a.active {
            color: #ffffff;
            background-color: rgba(255,255,255,0.08);
            border-bottom: 3px solid var(--pln-yellow);
        }

        .page-banner {
            background: linear-gradient(135deg, #005288 0%, #0082c8 100%);
            color: white;
            padding: 25px 20px 35px;
            text-align: center;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .main-container {
            max-width: 900px;
            margin: -20px auto 40px;
            padding: 0 16px;
        }

        .card-form {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 25px rgba(0,82,136,0.08);
            border: 1px solid #e2e8f0;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--pln-dark);
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #cbd5e1;
            border-radius: 10px;
            font-size: 0.95rem;
            color: #1e293b;
            background-color: #f8fafc;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--pln-blue);
            background-color: #ffffff;
        }

        .btn-submit {
            background-color: var(--pln-blue);
            color: white;
            border: none;
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: var(--pln-dark);
        }

        footer {
            background-color: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 25px 20px;
            font-size: 0.82rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="papan-pengumuman">
        <marquee behavior="scroll" direction="left">
            📢 POSKO PLTD MINDIPTANA: Pembangkit listrik beroperasi normal. Silakan buat laporan jika ada gangguan listrik atau kabel putus.
        </marquee>
    </div>

    <header>
        <div class="header-top">
            <div class="logo-box">
                <div class="logo-icon">⚡</div>
                <div class="logo-text">
                    <h1>PLN <span>PLTD Mindiptana</span></h1>
                </div>
            </div>
            <span class="tag-wilayah">Perbatasan PNG</span>
        </div>

        <nav class="main-nav">
            <div class="nav-container">
                <a href="index.html">🏠 Beranda</a>
                <a href="status.php">💡 Status Listrik</a>
                <a href="jadwal.html">📅 Jadwal Perbaikan</a>
                <a href="pengaduan.php" class="active">📝 Lapor Lampu Mati</a>
                <a href="profil.html">🏢 Profil PLTD</a>
            </div>
        </nav>
    </header>

    <section class="page-banner">
        <h2>Formulir Laporan Gangguan Listrik</h2>
        <p>Isi data di bawah ini untuk melaporkan masalah kelistrikan ke petugas</p>
    </section>

    <main class="main-container">
        <div class="card-form">
            <!-- Action mengarah tepat ke simpan.php -->
            <form action="simpan.php" method="POST">
                
                <div class="form-group">
                    <label>Nama Pelapor:</label>
                    <input type="text" name="nama_pelapor" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label>No. HP / WhatsApp:</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="Contoh: 081234567890" required>
                </div>

                <div class="form-group">
                    <label>Lokasi / Kampung:</label>
                    <select name="lokasi" class="form-control" required>
                        <option value="">-- Pilih Lokasi Kampung --</option>
                        <option value="Kampung Mindiptana">Kampung Mindiptana</option>
                        <option value="Kampung Imko">Kampung Imko</option>
                        <option value="Kampung Osso">Kampung Osso</option>
                        <option value="Kampung Tinggam">Kampung Tinggam</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kategori Gangguan:</label>
                    <select name="kategori" class="form-control" required>
                        <option value="Lampu Padam">Lampu Padam</option>
                        <option value="Kabel Putus">Kabel Putus</option>
                        <option value="Tiang Bermasalah">Tiang Bermasalah</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Gejala Gangguan:</label>
                    <input type="text" name="gejala" class="form-control" placeholder="Contoh: Lampu redup / Mati total" required>
                </div>

                <div class="form-group">
                    <label>Catatan Tambahan:</label>
                    <textarea name="catatan" class="form-control" rows="3" placeholder="Jelaskan patokan rumah atau detail lainnya"></textarea>
                </div>

                <button type="submit" name="submit" class="btn-submit">📤 Kirimkan Laporan ke Posko</button>

            </form>
        </div>
    </main>

    <footer>
        <p><strong>PLN PLTD Distrik Mindiptana</strong></p>
        <p style="margin-top: 5px;">Sub Rayon Tanah Merah — Wilayah Perbatasan RI - PNG</p>
    </footer>

</body>
</html>