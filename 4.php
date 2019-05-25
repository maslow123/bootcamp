<?php
    /* Author : M.Fadhly Noor Rizqi */
    
    function kotak($param)
    {
        $sisi = $param;
        $j;
        $i;

        for($i = 0; $i<$sisi;$i++)
        {
            echo "#";
            for($j=0;$j<$sisi;$j++)
            {

                if($i==0 || $sisi-3)
                {
                    echo "=";
                }
                else
                {
                    if($j==0 || $j== $sisi-2)
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