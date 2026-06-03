<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengalaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --nav-pink: #f5b7cc;
            --hover-pink: #ec9fbb;
            --vibrant-pink: #ff4d8d;
            --text-brown-black: #4a3d3d;
            --soft-bg-pink: #fff5f7;
        }

        body { background-color: var(--soft-bg-pink); font-family: 'Segoe UI', sans-serif; min-height: 100vh; display: flex; flex-direction: column; }

        .navbar { background-color: var(--nav-pink) !important; padding: 17px 0; }
        .navbar-brand { font-weight: 800; font-size: 1.8rem; color: var(--text-brown-black) !important; }
        .nav-link { 
            color: var(--text-brown-black) !important; font-weight: 700; padding: 10px 12px !important; 
            border-radius: 6px; transition: 0.3s; display: flex; align-items: center; gap: 6px;
        }
        .nav-link:hover { background-color: var(--hover-pink); color: #ffffff !important; }

        .content-wrapper { flex: 1; padding: 40px 20px; }

        .detail-card { background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); max-width: 900px; margin: auto; }
        .detail-body { padding: 35px; }
        .badge-time { display: inline-block; background: #ffe4ee; color: var(--vibrant-pink); padding: 8px 15px; border-radius: 10px; font-weight: 600; margin-bottom: 15px; }
        .section-title { color: var(--text-brown-black); font-weight: 700; margin-bottom: 10px; }
        .description-box, .kesan-box { background: #fffafa; border: 1px solid #f5b7cc; border-radius: 15px; padding: 20px; margin-top: 15px; }
        
        .btn-pink { background: var(--nav-pink); color: var(--text-brown-black); border: none; padding: 10px 20px; border-radius: 10px; font-weight: 700; transition: 0.3s; }
        .btn-pink:hover { background: var(--hover-pink); color: white; }
        .site-footer { margin-top: 40px; text-align: center; color: var(--text-brown-black); font-size: 0.9rem; }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Detail Kegiatan</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/"><i class="bi bi-house-door"></i> Beranda</a>
            <a class="nav-link" href="/profil"><i class="bi bi-person-circle"></i> Profil</a>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    @if($pengalaman)
    <div class="detail-card">
        <div class="row g-0">
            <!-- Foto Kiri -->
            <div class="col-md-5">
                <img src="{{ $pengalaman['gambar'] }}" alt="{{ $pengalaman['judul'] }}" 
                     style="width: 100%; height: 100%; aspect-ratio: 9/16; object-fit: cover;">
            </div>
            <!-- Deskripsi Kanan -->
            <div class="col-md-7">
                <div class="detail-body">
                    <span class="badge-time"><i class="bi bi-calendar-event"></i> {{ $pengalaman['waktu'] }}</span>
                    <h1 class="fw-bold mb-4" style="color: var(--text-brown-black);">{{ $pengalaman['judul'] }}</h1>

                    <div class="description-box">
                        <h5 class="section-title"><i class="bi bi-journal-text"></i> Deskripsi Kegiatan</h5>
                        <p class="mb-0">{{ $pengalaman['deskripsi'] }}</p>
                    </div>

                    <div class="kesan-box">
                        <h5 class="section-title"><i class="bi bi-heart-fill"></i> Kesan yang Dirasakan</h5>
                        <p class="mb-0">{{ $pengalaman['kesan'] }}</p>
                    </div>

                    <div class="mt-4">
                        <a href="/profil" class="btn btn-pink">
                            <i class="bi bi-arrow-left"></i> Kembali ke Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="text-center">
        <h3>Data tidak ditemukan</h3>
        <a href="/profil" class="btn btn-pink mt-3">Kembali ke Profil</a>
    </div>
    @endif

    <footer class="site-footer">
        <div class="fw-bold mb-0">&copy; 2026 Nazla Salsabila</div>
        <div style="margin-top: 5px;">Teknologi Informasi, Universitas Lambung Mangkurat</div>
    </footer>
</div>

</body>
</html>