<?php

declare(strict_types=1);

require_once __DIR__ . "/Customized.php";

// Connection to database
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "percetakan_buku");
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

// Tables in my database (percetekan_buku)
/*
    First
    mesin -> id, nomor_rangka, merek_mesin (v)
    pegawai -> id, nama_pegawai, alamat, telepon (v)
    kategori_buku -> id, kategori_buku ~ manual
    bahan_baku -> id, nama_bahan, stok, harga_satuan
    distributor_bahan_baku -> nama_distributor, alamat, telepon
    toko_buku -> id, nama_toko, alamat, telepon
*/

// Second
/* 
    buku -> id, judul_buku, penulis, jml_halaman, id_kategori, stok, harga_satuan
    transaksi_bahan_baku -> id_distributor, id_pegawai, waktu_transaksi, biaya_penanganan
    transaksi_buku -> id, id_toko, id_pegawai, waktu_transaksi
    kerja_pegawai -> id, id_pegawai, shift_siang
*/

// Third
/*  
    komposisi -> id, id_buku, id_bahan_baku, jml_bahan_terpakai, harga_satuan
    detail_transaksi_bahan_baku -> id, id_tr_bahan_baku, id_bahan_baku, jml_bahan_baku, harga_satuan
    detail_transaksi_buku -> id, id_tr_buku, id_buku, jml_buku, harga_satuan
    kelompok_kerja -> id, id_kerja_pegawai, kelompok
*/

// Fourth
/* 
    kerja_mesin -> id_mesin	id_buku, id_kelompok_kerja, jml_buku_diproduksi, tanggal_kerja	
*/

// Just testing :)
var_dump(Bay\Customized::generateDistributorName());

$rows = 0; // Total rows inserted
$affected_rows = 0;
for ($i = 0; $i < $rows; $i++) {
    // Create fake data
    // *uncomment to use
    $name = Bay\Customized::generateName();
    $contact = Bay\Customized::generateContact();
    $address = Faker\Factory::create()->streetAddress();
    // $chassisID = Bay\Customized::generateRandomString(17);
    // $chassisID = strtoupper($chassisID);
    // $brand = Bay\Customized::generateBrand();

    // Inserting data
    // *uncomment to use
    // $conn->query("INSERT INTO pegawai (nama_pegawai, alamat, telepon) VALUES ('$name', '$address', '$contact');");
    // $affected_rows += $conn->affected_rows;
}

// if ($rows === $affected_rows) {
//     echo "Success with " . $affected_rows . " row(s) affected.\n";
// } else {
//     echo "Failed";
// }
