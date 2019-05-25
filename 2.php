<?php
    /* Author : M.Fadhly Noor Rizqi */
    
    function betweenDays($tanggal_pertama,$tanggal_kedua)
    {
        $waktu_sekarang = strtotime($tanggal_kedua);

        $tanggalpertama = strtotime($tanggal_pertama);
        $diff = $waktu_sekarang - $tanggalpertama;

        // Bulatkan diff dengan menggunakan function round
        $round = round($diff / (60 * 60 * 24));

        //lakukan perulangan untuk menyelisih tanggal pertama dan tanggal kedua
        for($i= 1; $i<=$round; $i++)
        {
            $result = date('d-m-Y',strtotime($tanggal_pertama. "+".$i." days")-1);
            echo "'".$result."', ";
        }
        echo "'".$tanggal_kedua."'";
    }

    $hasil = betweenDays("20-05-2019","25-05-2019");
    echo $hasil;