<?php
    /* Author : M.Fadhly Noor Rizqi */
    
    function ganti_kata($kata,$huruflama,$hurufbaru)
    {
        $kata;

        $ubah_kata = array($huruflama => $hurufbaru);

        foreach($ubah_kata as $ganti=>$baru)
        {
            //cek apakah ada
            if(strpos($kata,$ganti))
            {
                $katabaru = implode($baru,explode($ganti, $kata));
            }
            return $katabaru;
        }
    }

    $result = ganti_kata('jonggol','o','a');
    echo $result;