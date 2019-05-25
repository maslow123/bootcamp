<?php
    $connection = mysql_connect('localhost','root','');
    mysql_select_db('bootcamp');


    if(isset($_POST['tambah_user']))
    {    
        $nama = $_POST['user'];

        $result = "INSERT INTO users VALUES ('','$nama')";
        mysql_query($result);
        echo "<script>alert('User berhasil ditambahkan');
                      window.history.back();</script>";
    }
    elseif(isset($_POST['tambah_skill']))
    {
        $id = $_POST['id'];
        $skill = $_POST['skill'];

        $result = "INSERT INTO skills  VALUES ('','$skill', '$id')";
        mysql_query($result);
        echo "<script>alert('Skill berhasil ditambahkan');
                      window.history.back();</script>";
    }
?>

