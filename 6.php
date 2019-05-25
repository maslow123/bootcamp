<?php
    include 'config.php';
    /* Author : M.Fadhly Noor Rizqi */
    ?>
    
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                
                <form method="post">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="user" class="form-control" placeholder="Masukkan programmer baru">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-primary col-md-6" name="tambah_user"> 
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php
                $data = mysql_query("SELECT *FROM users");
                while($v = mysql_fetch_object($data)){
                ?>
                    
                <form action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        Nama User
                        <hr class="hr-danger">
                        <li><?= $v->name ?></li>
                    </div>
                    <div class="col-md-4">
                        Skill
                        <hr class="hr">
                        <?php 
                         $join = mysql_query("SELECT *FROM users INNER JOIN skills ON skills.user_id = users.id");
                         while($row = mysql_fetch_object($join)):
                        ?>
                         <?php if ($v->id == $row->user_id): ?>
                           <li><?= $row->nama ?></li>
                         <?php endif; ?>
                       <?php endwhile; ?>
                     </ul>
                    </div>
                    <div class="col-md-2">
                        <input type="hidden" name="id" value="<?= $v->id?>">
                        <input type="text" name="skill" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-outline-primary" value="Tambah" name="tambah_skill">
                    </div>
                    </form>
                </div>
                <hr>
                </form>
                <?php } // end while $v?>
            </div>
        </div>
    </div>
</body>
</html>