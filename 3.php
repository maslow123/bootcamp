<?php
    
    /* Author : M.Fadhly Noor Rizqi */
    function hitungHurufVokal($parameter)
    {
        $data = substr_count($parameter, 'a')+substr_count($parameter, 'i')+substr_count($parameter, 'u')+substr_count($parameter, 'e')+substr_count($parameter, 'o');

        return $data;
    }

    $parameter = "programmer";
    $result = hitungHurufVokal($parameter);

    echo "Jumlah huruf vokal didalam kata <b>".$parameter. "</b> yaitu berjumlah <b>".$result."</b> huruf";