<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table Mahasiswa berdasarkan nim secara Descending
$siswa = query("SELECT * FROM warga ORDER BY nik DESC");

// Membuat nama file
$filename = "data mahasiswa fti-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($siswa as $row) : ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nik']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['jk']; ?></td>
            <td><?= $row['agama']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>