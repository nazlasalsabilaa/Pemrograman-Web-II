<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Perpustakaan</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 800px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; border: 2px solid #ffb6c1; }
        .welcome-box { margin-bottom: 15px; }
        h1 { color: #4a4a4a; margin-top: 0; margin-bottom: 50px; font-size: 32px; font-weight: bold; }
        p { color: #616161; font-size: 16px; line-height: 1.6; font-weight: 500; margin-bottom: 15px; }
        .menu-grid { display: flex; justify-content: center; gap: 20px; margin-top: 0; flex-wrap: wrap; }
        .menu-card { background: #fff; border: 2px solid #ffb6c1; border-radius: 6px; padding: 30px 25px; width: 180px; text-decoration: none; color: #4a4a4a; font-weight: bold; font-size: 16px; transition: all 0.2s ease; box-shadow: 0 2px 5px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; justify-content: center; }
        .menu-number { font-size: 36px; font-weight: 800; color: #ff6584; margin-bottom: 10px; transition: color 0.2s ease; }
        .menu-card:hover { background-color: #ffb6c1; color: #fff; transform: translateY(-3px); }
        .menu-card:hover .menu-number { color: rgba(255, 255, 255, 0.8); }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-box">
            <h1>SELAMAT DATANG DI PERPUSTAKAAN SVARA!</h1>
            <p>Silakan pilih menu di bawah ini untuk mengelola data data perpustakaan.</p>
        </div>

        <div class="menu-grid">
            <a href="Member.php" class="menu-card">
                <div class="menu-number">01</div>
                Daftar Member
            </a>
            <a href="Buku.php" class="menu-card">
                <div class="menu-number">02</div>
                Daftar Buku
            </a>
            <a href="Peminjaman.php" class="menu-card">
                <div class="menu-number">03</div>
                Daftar Peminjaman
            </a>
        </div>
    </div>
</body>
</html>