<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Switch Case - Zodiak</title>
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid justify-content-end">
    <span class="navbar-brand  h1">Zodiak - Switch Case</span>
  </div>
</nav>
<h3 class="text-center mb-4">Masukkan Tanggal dan Bulan Lahir Anda</h3>

<!--Form-->
    <form action="" method="get">
    <div class="container">
        <h4>Masukkan Tanggal :</h4>
            <label for="Masukkan Tanggal"></label>
            <input type="number" name="tgl">
        <h4>Masukkan Bulan :</h4>
            <label for="Masukkan Bulan"></label>
            <input type="number" name="bln">
        <h6>Klik Kirim Dibawah:</h6>
            <button type="submit" class="btn btn-outline-secondary">Kirim</button>        
    </form>
    </div>
</body>
</html>

<?php
    
    //Cek Isi Variabel
    if ( isset ($_GET['bln']) && isset($_GET['tgl']) ) {
    
    //Variabel
    $bln = $_GET['bln'];
    $tgl = $_GET['tgl'];

    //Jika Input salah/tidak sesuai
    $hasil = 'SALAH!';

    switch ($bln) {
        case 1:
            if ( $tgl >=1 && $tgl <=19 ) {
                $hasil = 'CAPCICORN';
            }

            if ( $tgl >=20 && $tgl <=31) {
                $hasil = 'AQUARIUS';
            }
            break;

        case 2:
            if ( $tgl >=1 && $tgl <=18 ) {
                $hasil = 'AQUARIUS';
            }

            if ( $tgl >=19 && $tgl <=28) {
                $hasil = 'PISCES';
            }
            break;

        case 3:
            if ( $tgl >=1 && $tgl <=20 ) {
                $hasil = 'PISCES';
            }

            if ( $tgl >=21 && $tgl <=31) {
                $hasil = 'ARIES';
            }
            break;

        case 4:
            if ( $tgl >=1 && $tgl <=19 ) {
                $hasil = 'ARIES';
            }

            if ( $tgl >=20 && $tgl <=30) {
                $hasil = 'TAURUS';
            }
            break;

        case 5:
            if ( $tgl >=1 && $tgl <=20 ) {
                $hasil = 'TAURUS';
            }

            if ( $tgl >=21 && $tgl <=31) {
                $hasil = 'GEMINI';
            }
            break;

        case 6:
            if ( $tgl >=1 && $tgl <=20 ) {
                $hasil = 'GEMINI';
            }

            if ( $tgl >=21 && $tgl <=30) {
                $hasil = 'CANCER';
            }
            break;

        case 7:
            if ( $tgl >=1 && $tgl <=22 ) {
                $hasil = 'CANCER';
            }

            if ( $tgl >=23 && $tgl <=31) {
                $hasil = 'LEO';
            }
            break;

        case 8:
            if ( $tgl >=1 && $tgl <=22 ) {
                $hasil = 'LEO';
            }

            if ( $tgl >=23 && $tgl <=31) {
                $hasil = 'VIRGO';
            }
            break;

        case 9:
            if ( $tgl >=1 && $tgl <=22 ) {
                $hasil = 'VIRGO';
            }

            if ( $tgl >=23 && $tgl <=30) {
                $hasil = 'LIBRA';
            }
            break;

        case 10:
            if ( $tgl >=1 && $tgl <=22 ) {
                $hasil = 'LIBRA';
            }

            if ( $tgl >=23 && $tgl <=31) {
                $hasil = 'SCORPIUS';
            }
            break;

        case 11:
            if ( $tgl >=1 && $tgl <=21 ) {
                $hasil = 'SCORPIUS';
            }

            if ( $tgl >=22 && $tgl <=30) {
                $hasil = 'SAGITARIUS';
            }
            break;

        case 12:
            if ( $tgl >=1 && $tgl <=21 ) {
                $hasil = 'SAGITARIUS';
            }

            if ( $tgl >=22 && $tgl <=31) {
                $hasil = 'CAPCICORN';
            }
            break;


        default:
            $hasil = 'BELUM ADA';
            break;
     
     echo $hasil;
    }
}
    

?>
