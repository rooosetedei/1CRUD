<?php

use Dom\Mysql;

require('connect.php');
$nisn = isset($_GET['NISN'])?$_GET['NISN']:0;
$read_query = mysqli_query($db_conn,"SELECT * FROM identity_data WHERE NISN='$nisn'");



if(isset($_GET['submit'])){
    $submit = isset($_GET['submit'])?$_GET['submit']:"";
    if($submit === "No"){
        
        header('location:admin.php');
        exit;

    }elseif($submit === "Yes"){
        mysqli_query($db_conn,"DELETE FROM identity_data WHERE NISN='$nisn'");
         header('location:admin.php');
         exit;

    }
    
}

?>
<html
lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>delete_data</title>
<style>
    body{

        padding: 0 auto;
        margin: 0 auto;
        background: url('img/school.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .container{
      
        margin: 30px 190px;
        padding: 9px;
        font: bold;
        background:linear-gradient(to bottom,rgba(206, 131, 253, 0.868),rgba(152, 172, 223, 0.667));
        border: solid 2px rgb(9, 9, 120);
        border-radius: 30px;

    }
    .warn_title{
        padding: 1px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
    }
    .database_show{
        padding: 2px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 20px;
        margin: 30px;
    }
    .button{
    
        background-color: pink;
        border:blue solid 2px;
        border-radius: 30px;
        margin: 27px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 19px;
        padding: 7px 25px;
    }
    .button:active{
         background-color: black;
        border:blue solid 2px;
        color: aqua;
        border-radius: 30px;
        margin: 27px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 19px;
        padding: 7px 25px;
    }
    .button_container{
        justify-content: center;
        text-align: center;
    }
</style>
</head>
<body>
    <main>
        <div class="container">
            <div class="warn_title">
                <h1>Are Your Sure want to delete : </h1>
            </div>
            <?php while($readata = mysqli_fetch_assoc($read_query)): ?>
            <div class="database_show">
                <ul>
                    <li>NAME    : <?=$readata['Name']?></li>
                    <li>AGE     : <?=$readata['Age']?></li>
                    <li>EMAIL   : <?= $readata['Email']?></li>
                    <li>INSTANTION : <?= $readata['instantion']?></li>
                    <li>NISN    : <?= $readata['NISN']?></li>
                    <li>ROAD    : <?= $readata['Road']?></li>
                    <li>CITY    : <?= $readata['City']?></li>
                    <li>COUNTRY : <?= $readata['Country']?></li>
                </ul>

            </div>
            
            <form action="del.php" method="get">
            <div class="button_container">
                    <input type="hidden" name="NISN" value="<?php echo $readata['NISN'];?>">
                    <input class="button" type="submit" name="submit" value="Yes">
                    <input class="button" type="submit" name="submit" value="No">
                
            </div>
            </form>
        </div>
        <?php endwhile;?>
    </main>
</body>
</html