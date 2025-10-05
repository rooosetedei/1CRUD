<?php
    include_once("connect.php");
    $identity_array  = queryku("SELECT * FROM identity_data");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body  onload="document.body.classList.add('loadbre');">
    <div class="table_container">
    <div class="table_margin">
    <h1 class="judul">IDENTITY LIST</h1>
    
    <table cellpadding="10" cellspacing="0">
        <thead>
          
                <tr>
                    <th>No.</th>
                    <th style="width:190px;">Action</th>
                    <th style="width: 10px auto;">Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Instantion</th>
                    <th>NISN</th>
                    <th>City</th>
                    <th>Road</th>
                    <th>Country</th>
                </tr>

        </thead>
        <tbody>

            <?php       $i = 0;
                        foreach($identity_array as $dataku):
                         $i ++;   
                ?>
            <tr>
                <td><?=$i?></td>
                <td>
                    <div class="action">
                    <a href="del.php?NISN=<?php echo $dataku["NISN"] ;?>" class="delete"><img src="img/gbg.png" alt="delete" class="gbg">Delete</a> | <a href="edit.php?nisn=<?php echo $dataku["NISN"];?>"> <img class="pencil"src="img/pencil.png" alt="change">Change</a></td>
                    </div>
                <td><?= $dataku["Name"]?></td>
                <td><?= $dataku["Age"]?></td>
                <td><?= $dataku["Email"]?></td>
                <td><?= $dataku["instantion"]?></td>
                <td><?= $dataku["NISN"]?></td>
                <td><?= $dataku["City"]?></td>
                <td><?= $dataku["Road"]?></td>
                <td><?=$dataku["Country"]?></td>

            </tr>
            <?php
            endforeach;
            ?>

        </tbody>
        <tfoot>

        </tfoot>
    </table>

</div>
<a href="index.php" style="text-align: center;"><h4>Go Back</h4></a>    
</div>
</body>
