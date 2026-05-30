<?php
require_once 'Model.php';

$id = $_GET['id'] ?? null;
if (!$id) { header("Location: Member.php"); exit(); }

$member = getMemberById($id);
if (!$member) { header("Location: Member.php"); exit(); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateMember($id, $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    header("Location: Member.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Member</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 600px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 2px solid #ffd1dc; }
        h2 { color: #4a4a4a; margin-top: 0; margin-bottom: 35px; text-align: center; font-weight: bold; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: bold; margin-bottom: 8px; }
        input[type="text"], input[type="datetime-local"], input[type="date"], textarea { width: 100%; padding: 10px; border: 2px solid #ffd1dc; border-radius: 4px; box-sizing: border-box; }
        textarea { resize: vertical; height: 80px; }
        .action-footer { margin-top: 30px; display: flex; gap: 10px; justify-content: center; }
        .btn-action { padding: 10px 20px; border: 2px solid #ffd1dc; border-radius: 4px; cursor: pointer; text-decoration: none; font-weight: bold; background: #fff; }
        .btn-blue { color: #0066cc; }
        .btn-blue:hover { background: #0066cc; color: #fff; }
        .btn-red { color: #c62828; }
        .btn-red:hover { background: #c62828; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>EDIT DATA MEMBER</h2>
        <form action="" method="POST">
            <input type="hidden" name="nomor_member" value="<?= htmlspecialchars($member['nomor_member']); ?>">
            
            <div class="form-group">
                <label>Nama Member:</label>
                <input type="text" name="nama_member" value="<?= htmlspecialchars($member['nama_member']); ?>" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" required><?= htmlspecialchars($member['alamat']); ?></textarea>
            </div>
            <div class="form-group">
                <label>Tanggal Mendaftar:</label>
                <input type="datetime-local" name="tgl_mendaftar" value="<?= date('Y-m-d\TH:i', strtotime($member['tgl_mendaftar'])); ?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Terakhir Bayar:</label>
                <input type="date" name="tgl_terakhir_bayar" value="<?= htmlspecialchars($member['tgl_terakhir_bayar']); ?>" required>
            </div>
            <div class="action-footer">
                <button type="submit" class="btn-action btn-blue">Simpan Perubahan Data Member</button>
                <a href="Member.php" class="btn-action btn-red">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>