<?php
require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updatePeminjaman(
        $_POST['id_peminjaman'], 
        $_POST['id_member'], 
        $_POST['id_buku'], 
        $_POST['tgl_pinjam'], 
        $_POST['tgl_kembali']
    );
    header("Location: Peminjaman.php");
    exit();
}

$p = getPeminjamanById($_GET['id']);
$members = getAllMember();
$bukus = getAllBuku();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Peminjaman</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 600px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; border: 2px solid #ffd1dc; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h2 { text-align: center; color: #4a4a4a; margin-bottom: 30px; font-weight: bold; }
        .form-group { margin-bottom: 20px; text-align: left; }
        label { display: block; font-weight: bold; margin-bottom: 8px; }
        input, select { width: 100%; padding: 10px; border: 2px solid #ffd1dc; border-radius: 4px; box-sizing: border-box; color: #4a4a4a; }
        .action-footer { margin-top: 30px; display: flex; gap: 10px; justify-content: center; }
        .btn-action { padding: 10px 20px; border: 2px solid #ffd1dc; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; background: #fff; transition: 0.2s; }
        .btn-blue { color: #0066cc; } .btn-blue:hover { background-color: #0066cc; color: #fff; }
        .btn-red { color: #c62828; } .btn-red:hover { background-color: #c62828; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>EDIT DATA PEMINJAMAN</h2>
        <form action="" method="POST">
            <input type="hidden" name="id_peminjaman" value="<?= $p['id_peminjaman']; ?>">
            
            <div class="form-group">
                <label>Pilih Member:</label>
                <select name="id_member" required>
                    <?php foreach ($members as $m): ?>
                        <option value="<?= $m['id_member']; ?>" <?= ($m['id_member'] == $p['id_member']) ? 'selected' : ''; ?>>
                            <?= htmlspecialchars($m['nama_member']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Pilih Buku:</label>
                <select name="id_buku" required>
                    <?php foreach ($bukus as $b): ?>
                        <option value="<?= $b['id_buku']; ?>" <?= ($b['id_buku'] == $p['id_buku']) ? 'selected' : ''; ?>>
                            <?= htmlspecialchars($b['judul_buku']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Tanggal Pinjam:</label>
                <input type="date" name="tgl_pinjam" value="<?= $p['tgl_pinjam']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Tanggal Kembali:</label>
                <input type="date" name="tgl_kembali" value="<?= $p['tgl_kembali']; ?>" required>
            </div>
            
            <div class="action-footer">
                <button type="submit" class="btn-action btn-blue">Simpan Perubahan Data Peminjaman</button>
                <a href="Peminjaman.php" class="btn-action btn-red">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>