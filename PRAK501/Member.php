<?php
require_once 'Model.php';

if (isset($_GET['hapus'])) {
    deleteMember($_GET['hapus']);
    header("Location: Member.php");
    exit();
}

$members = getAllMember();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Member</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f5; margin: 0; padding: 20px; color: #4a4a4a; }
        .container { max-width: 1000px; background: #fff0f2; margin: 50px auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; border: 2px solid #ffd1dc; }
        h2 { color: #4a4a4a; margin-top: 0; margin-bottom: 35px; text-align: center; font-weight: bold; }
        .action-header { margin-bottom: 25px; display: flex; gap: 10px; align-items: center; }
        .btn-top-action { padding: 8px 15px; border: 2px solid #ffd1dc; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; font-size: 14px; font-weight: bold; background: #fff; transition: background-color 0.2s, color 0.2s, border-color 0.2s; }
        .btn-blue { color: #0066cc; }
        .btn-blue:hover { background-color: #0066cc; color: #fff; border-color: #0066cc; }
        .btn-green { color: #00796b; }
        .btn-green:hover { background-color: #00796b; color: #fff; border-color: #00796b; }
        .btn-red { color: #c62828; }
        .btn-red:hover { background-color: #c62828; color: #fff; border-color: #c62828; }
        .btn-gray { color: #616161; margin-left: auto; }
        .btn-gray:hover { background-color: #757575; color: #fff; border-color: #757575; }
        table { border-collapse: collapse; width: 100%; background: #fff; margin-top: 10px; table-layout: fixed; }
        th, td { padding: 12px; border: 2px solid #ffd1dc; word-wrap: break-word; }
        th { background-color: #da233f86; color: #4a4a4a; font-weight: bold; text-align: center; }
        tr:nth-child(even) { background-color: #fffbfb; }
        input[type="radio"] { cursor: pointer; width: 16px; height: 16px; accent-color: #ff88a3; }
        .kolom-id { width: 60px; }
        .kolom-nomor { width: 60px; }
        .kolom-teks { width: 180px; }
    </style>
    <script>
        function getSelectedId() {
            const selected = document.querySelector('input[name="selected_id"]:checked');
            if (!selected) {
                alert('Silahkan pilih salah satu data member yang ada di tabel terlebih dahulu!');
                return null;
            }
            return selected.value;
        }
        function aksiEdit() {
            const id = getSelectedId();
            if (id) window.location.href = 'FormEditMember.php?id=' + id;
        }
        function aksiHapus() {
            const id = getSelectedId();
            if (id && confirm('Yakin ingin menghapus data member ini?')) {
                window.location.href = 'Member.php?hapus=' + id;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>DAFTAR MEMBER</h2>
        <div class="action-header">
            <a href="FormTambahMember.php" class="btn-top-action btn-blue">Tambah Data Member</a>
            <button type="button" onclick="aksiEdit()" class="btn-top-action btn-green">Edit Data Member</button>
            <button type="button" onclick="aksiHapus()" class="btn-top-action btn-red">Hapus Data Member</button>
            <a href="Index.php" class="btn-top-action btn-gray">Kembali</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 50px;">Pilih</th>
                    <th class="kolom-id">ID Member</th>
                    <th class="kolom-teks">Nama Member</th>
                    <th class="kolom-nomor">Nomor Member</th>
                    <th class="kolom-teks">Alamat</th>
                    <th style="width: 120px;">Tanggal Mendaftar</th>
                    <th style="width: 120px;">Tanggal Terakhir Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($members)): ?>
                    <tr><td colspan="7" style="text-align:center; color: #888;">Tidak ada data.</td></tr>
                <?php else: ?>
                    <?php foreach ($members as $m): ?>
                        <tr>
                            <td style="text-align: center;">
                                <input type="radio" name="selected_id" value="<?= $m['id_member']; ?>">
                            </td>
                            <td style="text-align: center;"><?= htmlspecialchars($m['id_member']); ?></td>
                            <td class="kolom-teks"><b><?= htmlspecialchars($m['nama_member']); ?></b></td>
                            <td style="text-align: center;"><?= htmlspecialchars($m['nomor_member']); ?></td>
                            <td class="kolom-teks"><?= htmlspecialchars($m['alamat']); ?></td>
                            <td style="text-align: center;"><?= htmlspecialchars($m['tgl_mendaftar']); ?></td>
                            <td style="text-align: center;"><?= htmlspecialchars($m['tgl_terakhir_bayar']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>