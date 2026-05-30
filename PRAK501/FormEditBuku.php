<?php
require_once 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
    header("Location: Buku.php");
    exit();
}

$buku = getBukuById($id);
if (!$buku) {
    header("Location: Buku.php");
    exit();
}

$judul_buku = $buku['judul_buku'];
$penulis = $buku['penulis'];
$penerbit = $buku['penerbit'];
$tahun_terbit = $buku['tahun_terbit'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    updateBuku($id, $judul_buku, $penulis, $penerbit, $tahun_terbit);
    header("Location: Buku.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Edit Buku</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 600px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 2px solid #ffb6c1; }
        h2 { color: #4a4a4a; margin-top: 0; margin-bottom: 35px; text-align: center; width: 100%; display: block; font-weight: bold; }
        .form-group { margin-bottom: 20px; text-align: left; }
        label { display: block; font-weight: bold; margin-bottom: 8px; color: #4a4a4a; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; border: 2px solid #ffb6c1; border-radius: 4px; box-sizing: border-box; font-size: 14px; color: #4a4a4a; background-color: #fff; }
        .action-footer { margin-top: 30px; display: flex; gap: 10px; justify-content: center; }
        .btn-action { padding: 10px 20px; border: 2px solid #ffb6c1; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; background: #fff; transition: background-color 0.2s, color 0.2s, border-color 0.2s; }
        .btn-blue { color: #0066cc; }
        .btn-blue:hover { background-color: #0066cc; color: #fff; border-color: #0066cc; }
        .btn-red { color: #c62828; }
        .btn-red:hover { background-color: #c62828; color: #fff; border-color: #c62828; }
    </style>
</head>
<body>
    <div class="container">
        <h2>EDIT DATA BUKU</h2>

        <form action="" method="POST">
            <div class="form-group">
                <label>Judul Buku:</label>
                <input type="text" name="judul_buku" value="<?= htmlspecialchars($judul_buku); ?>" required>
            </div>
            <div class="form-group">
                <label>Penulis:</label>
                <input type="text" name="penulis" value="<?= htmlspecialchars($penulis); ?>" required>
            </div>
            <div class="form-group">
                <label>Penerbit:</label>
                <input type="text" name="penerbit" value="<?= htmlspecialchars($penerbit); ?>" required>
            </div>
            <div class="form-group">
                <label>Tahun Terbit:</label>
                <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($tahun_terbit); ?>" required>
            </div>
            <div class="action-footer">
                <button type="submit" class="btn-action btn-blue">Simpan Perubahan Data Buku</button>
                <a href="Buku.php" class="btn-action btn-red">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>