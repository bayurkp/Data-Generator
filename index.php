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
    kategori_buku -> id, kategori_buku ~ manual (v)
    bahan_baku -> id, nama_bahan, stok, harga_satuan (v)
    distributor_bahan_baku -> id, nama_distributor, alamat, telepon (v)
    toko_buku -> id, nama_toko, alamat, telepon (v)
*/

// Second
/* 
    buku -> id, judul_buku, penulis, jml_halaman, id_kategori, stok, harga_satuan ~ manual (v)
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
// var_dump("Something!");

// Selection data
$select = $conn->query("SELECT id FROM distributor_bahan_baku");
$idDistributor = array();
foreach ($select as $row) {
    array_push($idDistributor, (int) $row["id"]);
}

$select = $conn->query("SELECT id FROM pegawai");
$idPegawai = array();
foreach ($select as $row) {
    array_push($idPegawai, (int) $row["id"]);
}

$rows = 50; // Total rows inserted
$hours = 0;

for ($i = 0; $i < $rows; $i++) {
    // Create fake data
    // *uncomment to use
    // $name = Bay\Customized::generateName();
    // $contact = Bay\Customized::generateContact();
    // $address = Faker\Factory::create()->streetAddress();
    // $distributor = Bay\Customized::generateDistributorName();
    // $bookshop = Bay\Customized::generateBookshopName();
    // $chassisID = Bay\Customized::generateRandomString(17);
    // $chassisID = strtoupper($chassisID);
    // $brand = Bay\Customized::generateBrand();


    // Timestamp   
    $randNum = rand(0, 100);
    $hours += rand(0, 24);
    $weeks = "-60 weeks"; // transaksi bahan baku
    // $weeks = "-50 weeks"; // transaksi buku
    $time = "";
    $waktuTransaksi = "";

    if (date("H", strtotime("+$hours hours")) >= 12 and date("H", strtotime("+$hours hours")) <= 24) {
        $time = strtotime("$weeks +$hours hours +$randNum minutes +$randNum seconds");
    } else {
        $hours += 12;
        $time = strtotime("$weeks +$hours hours +$randNum minutes +$randNum seconds");
    }

    $waktuTransaksi = date("Y-m-d H:i:s", $time);


    $getIdDistributor = $idDistributor[rand(0, count($idDistributor) - 1)];
    $getIdPegawai = $idPegawai[rand(0, count($idPegawai) - 1)];
    $biaya = rand(0, 30) * 1000;

    // Inserting data
    // *uncomment to use
    // $conn->query("INSERT INTO distributor_bahan_baku (nama_distributor, alamat, telepon) VALUES ('$distributor', '$address', '$contact');");
    // $conn->query("INSERT INTO toko_buku (nama_toko_buku, alamat, telepon) VALUES ('$bookshop', '$address', '$contact');");
    // $conn->query("INSERT INTO pegawai (nama_pegawai, alamat, telepon) VALUES ('$name', '$address', '$contact');");


    // transaksi_bahan_baku -> id_distributor, id_pegawai, waktu_transaksi, biaya_penanganan 
    $conn->query("INSERT INTO transaksi_bahan_baku (id_distributor, id_pegawai, waktu_transaksi, biaya_penanganan) VALUES ('$getIdDistributor', '$getIdPegawai', '$waktuTransaksi', '$biaya');");
}
