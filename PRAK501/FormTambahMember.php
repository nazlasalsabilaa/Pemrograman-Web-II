<?php
require_once 'Model.php';

$nomor_otomatis = generateNomorMember();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    insertMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    header("Location: Member.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Member</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 600px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 2px solid #ffd1dc; }
        h2 { color: #4a4a4a; margin-top: 0; margin-bottom: 35px; text-align: center; font-weight: bold; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: bold; margin-bottom: 8px; }
        
        input[type="text"], input[type="datetime-local"], input[type="date"], textarea { 
            width: 100%; padding: 10px; border: 2px solid #ffd1dc; border-radius: 4px; box-sizing: border-box; 
        }
        textarea { resize: vertical; height: 80px; }

        ::placeholder { color: #aaa; opacity: 1; }

        .action-footer { margin-top: 30px; display: flex; gap: 10px; justify-content: center; }
        .btn-action { padding: 10px 20px; border: 2px solid #ffd1dc; border-radius: 4px; cursor: pointer; text-decoration: none; font-weight: bold; background: #fff; transition: 0.2s; }
        .btn-blue { color: #0066cc; } .btn-blue:hover { background: #0066cc; color: #fff; }
        .btn-red { color: #c62828; } .btn-red:hover { background: #c62828; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>TAMBAH DATA MEMBER</h2>
        <form action="" method="POST">
            <input type="hidden" name="nomor_member" value="<?= $nomor_otomatis; ?>">
            
            <div class="form-group">
                <label>Nama Member:</label>
                <input type="text" name="nama_member" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>
            <div class="form-group">
                <label>Tanggal Mendaftar:</label>
                <input type="datetime-local" name="tgl_mendaftar" required>
            </div>
            <div class="form-group">
                <label>Tanggal Terakhir Bayar:</label>
                <input type="date" name="tgl_terakhir_bayar" required>
            </div>
            <div class="action-footer">
                <button type="submit" class="btn-action btn-blue">Simpan Data Member</button>
                <a href="Member.php" class="btn-action btn-red">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>