<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "desa_kita");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah
function tambah($data)
{
    global $koneksi;

    $nik = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $jk = htmlspecialchars($data['jk']);
    $agama = htmlspecialchars($data['agama']);

    $sql = "INSERT INTO dwarga (nik, nama, alamat, jk, agama) VALUES ('$nik','$nama','$alamat','$jk','$agama')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($nim)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM warga WHERE nik = $nik");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $nim = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['alamat']);
    $jurusan = htmlspecialchars($data['jk']);
    $semester = htmlspecialchars($data['agama']);

    $sql = "UPDATE warga SET nama = '$nama', alamat = '$alamat', jk = '$jk', agama = '$semester' WHERE nik = $nik";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

