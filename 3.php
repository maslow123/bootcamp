<?php
    
    /* Author : M.Fadhly Noor Rizqi */
    function hitungHurufVokal($parameter)
    {
        $getData = substr_count($parameter, 'a')+substr_count($parameter, 'i')+substr_count($parameter, 'u')+substr_count($parameter, 'e')+substr_count($parameter, 'o');

        return $getData;
    }

    $result = hitungHurufVokal('hm..');
    echo "result : ".$result;

    
