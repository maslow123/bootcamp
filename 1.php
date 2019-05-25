<?php
    /* Author : M.Fadhly Noor Rizqi */

    function biodata()
    {
        $data['Nama'] = 'M.Fadhly Noor Rizqi';
        $data['Address'] = 'Griya Cipeucang Indah';
        $data['hobbies'] = array('Futsal','Badminton','Main Game');
        $data['Married'] = FALSE;
        $data['School'] = [[ 'highSchool' => 'SMK Fatahillah','university'=>'none']];
        foreach($data as $highSchool=>$values){
            $object = (object) $values;
        } 
        $data['Skills'] = array(
                        'PHP' => '82',
                        'Javascript' => '78',
                        'HTML' => '80',
                        'Codeigniter' => '85',
                        'CSS' => '75'
                    );

        
        return $data;
    }

    $data = biodata();
    $data_json = json_encode($data,JSON_PRETTY_PRINT);
    echo '<pre>Biodata'.$data_json.'</pre>';
?>