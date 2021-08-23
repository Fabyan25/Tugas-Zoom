<?php

    $tanggal = 20;
    $bulan = 7;

    $hasil = "SALAH";
    
    if ( ($tanggal >= 21 && $tanggal <=31 && $bulan == 3) || ($tanggal >=1 && $tanggal <=19 && $bulan == 4) ) {
        $hasil ="ARIES";
    }

    if ( ($tanggal >= 20 && $tanggal <=30 && $bulan == 4) || ($tanggal >=1 && $tanggal <=20 && $bulan == 5) ) {
        $hasil ="TAURUS";
    }
    
    if ( ($tanggal >= 21 && $tanggal <=31 && $bulan == 5) || ($tanggal >=1 && $tanggal <=20 && $bulan == 6) ) {
        $hasil ="GEMINI";
    }

    if ( ($tanggal >= 21 && $tanggal <=30 && $bulan == 6) || ($tanggal >=1 && $tanggal <=22 && $bulan == 7) ) {
        $hasil ="CANCER";
    }

    if ( ($tanggal >= 23 && $tanggal <=31 && $bulan == 7) || ($tanggal >=1 && $tanggal <=22 && $bulan == 8) ) {
        $hasil ="LEO";
    }

    if ( ($tanggal >= 23 && $tanggal <=31 && $bulan == 8) || ($tanggal >=1 && $tanggal <=22 && $bulan == 9) ) {
        $hasil ="VIRGO";
    }

    if ( ($tanggal >= 23 && $tanggal <=30 && $bulan == 9) || ($tanggal >=1 && $tanggal <=22 && $bulan == 10) ) {
        $hasil ="LIBRA";
    }

    if ( ($tanggal >= 23 && $tanggal <=31 && $bulan == 10) || ($tanggal >=1 && $tanggal <=21 && $bulan == 11) ) {
        $hasil ="SCORPIUS";
    }

    if ( ($tanggal >= 22 && $tanggal <=30 && $bulan == 11) || ($tanggal >=1 && $tanggal <=21 && $bulan == 12) ) {
        $hasil ="SAGITARIUS";
    }

    if ( ($tanggal >= 22 && $tanggal <=31 && $bulan == 12) || ($tanggal >=1 && $tanggal <=19 && $bulan == 1) ) {
        $hasil ="CAPCICORN";
    }

    if ( ($tanggal >= 20 && $tanggal <=31 && $bulan == 1) || ($tanggal >=1 && $tanggal <=18 && $bulan == 2) ) {
        $hasil ="AQUARIUS";
    }

    if ( ($tanggal >= 19 && $tanggal <=28 && $bulan == 2) || ($tanggal >=1 && $tanggal <=20 && $bulan == 3) ) {
        $hasil ="PISCES";
    }

    echo '<h1>' .$hasil. '</h1>';

?>
