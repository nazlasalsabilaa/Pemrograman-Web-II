<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Praktikan</title>
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

        .navbar { background-color: var(--nav-pink) !important; padding: 17px 0; }
        .navbar-brand { font-weight: 800; font-size: 1.8rem; color: var(--text-brown-black) !important; }
        .nav-link { 
            color: var(--text-brown-black) !important; font-weight: 700; padding: 10px 12px !important; 
            border-radius: 6px; transition: 0.3s; display: flex; align-items: center; gap: 6px;
        }
        .nav-link:hover { background-color: var(--hover-pink); color: #ffffff !important; }

        body { background-color: var(--soft-bg-pink); font-family: 'Segoe UI', sans-serif; min-height: 100vh; display: flex; flex-direction: column; }
        .content-wrapper { flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 40px 20px; }

        .card-profile { 
            background: #ffffff; padding: 40px; border-radius: 20px; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: center; 
            max-width: 700px; width: 100%;
        }
        
        .info-box {
            display: flex; align-items: center; gap: 15px; padding: 15px; 
            border-radius: 12px; background: #fffafa; border: 1px solid #f5b7cc; margin-bottom: 15px;
        }
        .icon-box { background: #ffe4ee; padding: 12px; border-radius: 10px; }
        
        .site-footer {
            margin-top: 40px;
            text-align: center;
            color: var(--text-brown-black);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Beranda Praktikan</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/"><i class="bi bi-house-door"></i> Beranda</a>
            <a class="nav-link" href="/profil"><i class="bi bi-person-circle"></i> Profil</a>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    <div class="card-profile">
        <h4 class="fw-bold mb-2" style="color: var(--text-brown-black);">Selamat Datang!</h4>
        <p class="text-muted mb-4">Website Praktikan Teknologi Informasi</p>
        
        <div class="info-box">
            <div class="icon-box"><i class="bi bi-person-fill fs-4" style="color: var(--vibrant-pink);"></i></div>
            <div class="text-start">
                <div class="text-muted small">Nama Lengkap</div>
                <div class="fs-5 fw-bold" style="color: var(--text-brown-black);"><?php echo e($profile['nama']); ?></div>
            </div>
        </div>
        
        <div class="info-box">
            <div class="icon-box"><i class="bi bi-person-badge fs-4" style="color: var(--vibrant-pink);"></i></div>
            <div class="text-start">
                <div class="text-muted small">Nomor Induk Mahasiswa</div>
                <div class="fs-5 fw-bold" style="color: var(--text-brown-black);"><?php echo e($profile['nim']); ?></div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="fw-bold">&copy; 2026 Nazla Salsabila</div>
        <div>Teknologi Informasi, Universitas Lambung Mangkurat</div>
    </footer>
</div>

</body>
</html><?php /**PATH C:\laragon\www\PRAK601\resources\views/beranda.blade.php ENDPATH**/ ?>