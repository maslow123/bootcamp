<?php
    /* Author : M.Fadhly Noor Rizqi */

    function kotak($param)
    {
        $angka = $param;
        $j;
        $i;

        for($i = 0; $i<$angka;$i++)
        {
            echo "#";
            for($j=0;$j<$angka;$j++)
            {

                if($i==0 || $angka-3)
                {
                    echo "=";
                }
                else
                {
                    if($j==0 || $j== $angka-2)
                    {
                        echo "#";
                    }
                    else
                    {
                        echo " ";
                    }
                }
            }

            echo "#";
            echo "<br/>";
        }    
    }
    $result = kotak(5);
    echo $result;
