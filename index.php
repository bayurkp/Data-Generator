<?php

declare(strict_types=1);

require_once __DIR__ . "/Customized.php";

// Connection to database
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "percetakan_buku");
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

// Selection data
// $select = $conn->query("SELECT id FROM mesin ORDER BY mesin.id ASC");
// $idMesin = array();
// foreach ($select as $row) {
//     array_push($idMesin, (int) $row["id"]);
// }

// $select = $conn->query("SELECT id FROM buku ORDER BY buku.id ASC");
// $idBuku = array();
// foreach ($select as $row) {
//     array_push($idBuku, (int) $row["id"]);
// }

// $select = $conn->query("SELECT id FROM kelompok_kerja ORDER BY kelompok_kerja.id ASC");
// $idKelompokKerja = array();
// foreach ($select as $row) {
//     array_push($idKelompokKerja, (int) $row["id"]);
// }

// $days = 0;
// for ($i = 0; $i < 50; $i++) {
//     // Date
//     $days++;
//     $weeks = "-54 weeks";
//     $time = "";
//     $tanggalKerja = "";

//     if (date("l", strtotime("$weeks +$days days")) === "Sunday") {
//         $days += 1;
//     } else if (date("l", strtotime("$weeks +$days days")) === "Saturday") {
//         $days += 2;
//     }

//     $time = strtotime("$weeks +$days days");

//     $tanggalKerja = date("Y-m-d", $time);

//     // kerja_mesin -> id_mesin	id_buku, id_kelompok_kerja, jml_buku_diproduksi, tanggal_kerja
//     $randIdMesin = rand(1, end($idMesin));
//     $randIdBuku = rand(1, end($idBuku));
//     $randIdKelompokKerja = rand(1, end($idKelompokKerja));
//     $randJmlBukuDiproduksi = rand(20, 100);

//     $conn->query("INSERT INTO kerja_mesin (id_mesin, id_buku, id_kelompok_kerja, jml_buku_diproduksi, tanggal_kerja) VALUES ('$randIdMesin', '$randIdBuku', '$randIdKelompokKerja', '$randJmlBukuDiproduksi', '$tanggalKerja');");
// }

// Just testing :)
// var_dump("Something!");

// Selection data
// $select = $conn->query("SELECT id FROM toko_buku");
// $idToko = array();
// foreach ($select as $row) {
//     array_push($idToko, (int) $row["id"]);
// }

// $select = $conn->query("SELECT id FROM pegawai");
// $idPegawai = array();
// foreach ($select as $row) {
//     array_push($idPegawai, (int) $row["id"]);
// }

// $rows = 50; // Total rows inserted
// $hours = 0;

for ($i = 1; $i <= 10; $i++) {

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
    // $randNum = rand(0, 100);
    // $hours += rand(0, 24);
    // // $weeks = "-61 weeks";
    // $time = "";
    // $waktuTransaksi = "";

    // if (date("H", strtotime("+$hours hours")) >= 12 and date("H", strtotime("+$hours hours")) <= 24) {
    //     $time = strtotime("$weeks +$hours hours +$randNum minutes +$randNum seconds");
    // } else {
    //     $hours += 12;
    //     $time = strtotime("$weeks +$hours hours +$randNum minutes +$randNum seconds");
    // }

    // $waktuTransaksi = date("Y-m-d H:i:s", $time);


    // $getIdToko = $idToko[rand(0, count($idToko) - 1)];
    // $getIdPegawai = $idPegawai[rand(0, count($idPegawai) - 1)];
    // $biaya = rand(0, 30) * 1000;

    // Inserting data
    // *uncomment to use
    // $conn->query("INSERT INTO distributor_bahan_baku (nama_distributor, alamat, telepon) VALUES ('$distributor', '$address', '$contact');");

    // $conn->query("INSERT INTO transaksi_buku (id_toko, id_pegawai, waktu_transaksi) VALUES ('$getIdToko', '$getIdPegawai', '$waktuTransaksi');");
    // $conn->query("SET FOREIGN_KEY_CHECKS=0;");
    // if ($i % 2 === 1) {
    //     $conn->query("INSERT INTO kerja_pegawai (id_pegawai, shift_siang) VALUES ('$i', b'0');");
    // } else {
    //     $conn->query("INSERT INTO kerja_pegawai (id_pegawai, shift_siang) VALUES ('$i', b'1');");
    // }
}


// detail_transaksi_bahan_baku -> id, id_tr_bahan_baku, id_bahan_baku, jml_bahan_baku, harga_satuan
// $select = $conn->query("SELECT id FROM transaksi_bahan_baku ORDER BY `transaksi_bahan_baku`.`id` ASC");
// $idTrBahanBaku = array();
// foreach ($select as $row) {
//     array_push($idTrBahanBaku, (int) $row["id"]);
// }

// $select = $conn->query("SELECT id, harga_satuan FROM bahan_baku");
// $idBahanBaku = array();
// $hargaBahan = array();
// foreach ($select as $row) {
//     // var_dump($row["harga_satuan"]);
//     array_push($idBahanBaku, (int) $row["id"]);
//     array_push($hargaBahan, (int) $row["harga_satuan"]);
// }


// for ($i = 1; $i <= end($idTrBahanBaku); $i++) {
//     $limit = rand(1, 5);
//     for ($j = 0; $j < $limit; $j++) {
//         $jml_BahanBaku = rand(5, 100);
//         $id_bahanBaku = $idBahanBaku[$j + 1];
//         $harga_bahan = $hargaBahan[$id_bahanBaku];
//         $conn->query("INSERT INTO detail_transaksi_bahan_baku (id_tr_bahan_baku, id_bahan_baku, jml_bahan_baku, harga_satuan) VALUES ('$i', '$id_bahanBaku', '$jml_BahanBaku', '$harga_bahan');");
//     }
// }

// // detail_transaksi_buku -> id, id_tr_buku, id_buku, jml_buku, harga_satuan
// $select = $conn->query("SELECT id FROM transaksi_buku ORDER BY `transaksi_buku`.`id` ASC");
// $idTrBuku = array();
// foreach ($select as $row) {
//     array_push($idTrBuku, (int) $row["id"]);
// }

// $select = $conn->query("SELECT id, harga_satuan FROM buku");
// $idBuku = array();
// $hargaSatuan = array();
// foreach ($select as $row) {
//     array_push($idBuku, (int) $row["id"]);
//     array_push($hargaSatuan, (int) $row["harga_satuan"]);
// }

// for ($i = 1; $i <= end($idTrBuku); $i++) {
//     $limit = rand(1, 5);
//     for ($j = 0; $j < $limit; $j++) {
//         $jml_buku = rand(5, 100);
//         $id_buku = $idBuku[$j];
//         $harga_satuan = $hargaSatuan[$id_buku];
//         $conn->query("INSERT INTO detail_transaksi_buku (id_tr_buku, id_buku, jml_buku, harga_satuan) VALUES ('$i', '$id_buku', '$jml_buku', '$harga_satuan');");
//     }
// }


// Kelompok kerja
// $select = $conn->query("SELECT id FROM kerja_pegawai");
// $idKerjaPegawai = array();
// foreach ($select as $row) {
//     array_push($idKerjaPegawai, (int) $row["id"]);
// }

// $kelompok = "A";
// for ($i = 1; $i <= end($idKerjaPegawai); $i++) {
//     if ($i % 10 === 1 and $i != 1) {
//         $kelompok++;
//     }
//     // var_dump($kelompok);
//     $conn->query("INSERT INTO kelompok_kerja (id_kerja_pegawai, kelompok) VALUES ('$i', '$kelompok');");
// }



// Komposisi
// $select = $conn->query("SELECT id, jml_halaman FROM buku");
// $idBuku = array();
// $jmlHalaman = array();
// foreach ($select as $row) {
//     array_push($idBuku, (int) $row["id"]);
//     array_push($jmlHalaman, (int) $row["jml_halaman"]);
// }

// $randomCoverPaper = rand(1, 2);

// for ($i = 1; $i <= end($idBuku); $i++) {
//     $jmlHalamanBuku = $jmlHalaman[$i - 1];
//     $blackInk = $jmlHalamanBuku / 1000;
//     // komposisi -> id, id_buku, id_bahan_baku, jml_bahan_terpakai, harga_satuan 
//     $conn->query("INSERT INTO komposisi (id_buku, id_bahan_baku, jml_bahan_terpakai, harga_satuan) VALUES ($i, '3', '$jmlHalamanBuku', 400);");
//     $conn->query("INSERT INTO komposisi (id_buku, id_bahan_baku, jml_bahan_terpakai, harga_satuan) VALUES ($i, '$randomCoverPaper', 2, 600);");
//     $conn->query("INSERT INTO komposisi (id_buku, id_bahan_baku, jml_bahan_terpakai, harga_satuan) VALUES ($i, '4', $blackInk, 78000);");
//     $conn->query("INSERT INTO komposisi (id_buku, id_bahan_baku, jml_bahan_terpakai, harga_satuan) VALUES ($i, '5', 0.08, 93000);");
// }

// Update buku
// $select = $conn->query("SELECT id_buku, SUM(jml_bahan_terpakai * harga_satuan) as harga FROM komposisi GROUP BY id_buku;");
// $harga = array();
// foreach ($select as $row) {
//     array_push($harga, (float) $row["harga"]);
// }

// for ($i = 1; $i <= 20; $i++) {
//     $hargaSatuan = $harga[$i - 1];
//     $randomStock = rand(50, 100);
//     $conn->query("UPDATE buku SET stok='$randomStock' WHERE buku.id=$i;");
//     // var_dump($harga[$i - 1]);
// }
