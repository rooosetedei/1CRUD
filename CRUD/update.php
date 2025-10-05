
<?php



ini_set('display_error',0);
include_once("connect.php");
if($_SERVER['REQUEST_METHOD']==="POST"){

    $name = isset($_POST['name'])?$_POST['name']:"";
    $age = isset($_POST['age'])?$_POST['age']:0;
    $email = isset($_POST['email'])?$_POST['email']:"";
    $nisn = isset($_POST['nisn'])?$_POST['nisn']:0;
    $city = isset($_POST['city'])?$_POST['city']:"";
    $road = isset($_POST['road'])?$_POST['road']:"";
    $country = isset($_POST['country'])?$_POST['country']:"";
    $instantion = isset($_POST['instantion'])?$_POST['instantion']:"";

    $intnisn = (int)$nisn;
    $intage = (int)$age;

    

}

$mysql_query_update = mysqli_query($db_conn,"UPDATE identity_data 
    SET Name='$name', 
    Age=$age, 
    Email='$email',
    City='$city',
    Road='$road',
    Country='$country',
    instantion='$instantion' WHERE NISN=$intnisn;
     ");

header("location:admin.php?pesan=database_sukses_di_update");



?>