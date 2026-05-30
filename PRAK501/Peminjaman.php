<?php
require_once 'Model.php';
if (isset($_GET['hapus'])) {
    deletePeminjaman($_GET['hapus']);
    header("Location: Peminjaman.php");
    exit();
}
$peminjamans = getAllPeminjaman();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peminjaman</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 1000px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; border: 2px solid #ffd1dc; }
        h2 { color: #4a4a4a; margin-top: 0; margin-bottom: 35px; text-align: center; font-weight: bold; }
        .action-header { margin-bottom: 25px; display: flex; gap: 10px; align-items: center; }
        .btn-top-action { padding: 8px 15px; border: 2px solid #ffd1dc; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; font-size: 14px; font-weight: bold; background: #fff; transition: background-color 0.2s, color 0.2s, border-color 0.2s; }
        .btn-blue { color: #0066cc; } .btn-blue:hover { background-color: #0066cc; color: #fff; border-color: #0066cc; }
        .btn-green { color: #00796b; } .btn-green:hover { background-color: #00796b; color: #fff; border-color: #00796b; }
        .btn-red { color: #c62828; } .btn-red:hover { background-color: #c62828; color: #fff; border-color: #c62828; }
        .btn-gray { color: #616161; margin-left: auto; } .btn-gray:hover { background-color: #757575; color: #fff; border-color: #757575; }
        table { border-collapse: collapse; width: 100%; background: #fff; margin-top: 10px; table-layout: fixed; }
        th, td { padding: 12px; border: 2px solid #ffd1dc; white-space: normal; word-break: break-word; }
        th { background-color: #da233f86; color: #4a4a4a; font-weight: bold; text-align: center; }
        td { text-align: left; }
        tr:nth-child(even) { background-color: #fffbfb; }
        input[type="radio"] { cursor: pointer; width: 16px; height: 16px; accent-color: #ff88a3; }
        .kolom-teks { max-width: 250px; }
    </style>
    <script>
        function getSelectedId() {
            const selected = document.querySelector('input[name="selected_id"]:checked');
            if (!selected) { alert('Silakan pilih salah satu data peminjaman pada tabel terlebih dahulu!'); return null; }
            return selected.value;
        }
        function aksiEdit() {
            const id = getSelectedId();
            if (id) window.location.href = 'FormEditPeminjaman.php?id=' + id;
        }
        function aksiHapus() {
            const id = getSelectedId();
            if (id && confirm('Yakin ingin menghapus data peminjaman yang dipilih?')) {
                window.location.href = 'Peminjaman.php?hapus=' + id;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>DAFTAR PEMINJAMAN</h2>
        <div class="action-header">
            <a href="FormTambahPeminjaman.php" class="btn-top-action btn-blue">Tambah Data Peminjaman</a>
            <button type="button" onclick="aksiEdit()" class="btn-top-action btn-green">Edit Data Peminjaman</button>
            <button type="button" onclick="aksiHapus()" class="btn-top-action btn-red">Hapus Data Peminjaman</button>
            <a href="Index.php" class="btn-top-action btn-gray">Kembali</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 50px;">Pilih</th>
                    <th style="width: 100px;">ID Peminjaman</th>
                    <th class="kolom-teks">Nama Member</th>
                    <th class="kolom-teks">Judul Buku</th>
                    <th style="width: 120px;">Tanggal Pinjam</th>
                    <th style="width: 120px;">Tanggal Kembali</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($peminjamans)): ?>
                    <tr><td colspan="6" style="text-align:center; color: #888;">Tidak ada data.</td></tr>
                <?php else: ?>
                    <?php foreach ($peminjamans as $p): ?>
                        <tr>
                            <td style="text-align: center;"><input type="radio" name="selected_id" value="<?= $p['id_peminjaman']; ?>"></td>
                            <td style="text-align: center;"><?= htmlspecialchars($p['id_peminjaman']); ?></td>
                            <td class="kolom-teks"><b><?= htmlspecialchars($p['nama_member']); ?></b></td>
                            <td class="kolom-teks"><b><?= htmlspecialchars($p['judul_buku']); ?></b></td>
                            <td style="text-align: center;"><?= $p['tgl_pinjam']; ?></td>
                            <td style="text-align: center;"><?= $p['tgl_kembali']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>