<?php

include("sambung.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
   $np = filter_input(INPUT_POST,'nama_panjang', FILTER_SANITIZE_STRING);
   $np2 = filter_input(INPUT_POST,'nama_pena', FILTER_SANITIZE_STRING);
   $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
   $tl = filter_input(INPUT_POST, 'tanggal_lahir');
   $alamat = filter_input(INPUT_POST,'alamat', FILTER_SANITIZE_STRING);
   $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   $jk = filter_input(INPUT_POST,'jenis_kelamin', FILTER_SANITIZE_STRING);
   $hb = $_POST['hobi'];
   $nt = $_POST['nomor_telephon'];
   $nw = $_POST['nomor_whatsapp'];


    // buat query
    $sql = "INSERT INTO data_anggota (nama_panjang, nama_pena, password, tanggal_lahir, alamat, email, jenis_kelamin, hobi, nomor_telephon, nomor_whatsapp) VALUE ('$np', '$np2', '$pass', '$tl', '$alamat', '$email', '$jk', '$ho', '$nt', '$nw')";
    $query = mysqli_query($dbc, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: masuk.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: daftar.php');
    }


} else {
    die("Akses dilarang...");
}

?>