<?php

use Dom\Mysql;

$username = "akaza";
$pw = "yourdick";
$db = "hilbram_demo";
$host = "127.0.0.1:3306";


$db_conn = mysqli_connect($host,$username,$pw,$db);

if(!$db_conn){

   die("<h1>Maaf, terjadi masalah koneksi database.</h1><p>Silakan coba lagi nanti.</p>");
}

function queryku($query){
   
   global $db_conn;

   $result = mysqli_query($db_conn,$query);
   
   

   while ($data = mysqli_fetch_assoc($result)){
      $assoc[] = $data;
      }

   return $assoc;


}
function insert($method){
    global $db_conn;
    $name = $method['Name'];
    $age = $method['Age'];
    $email = $method['Email'];
    $instantion = $method['Instantion'];
    $city = $method['city'];
    $nisn = $method['Nisn'];
    $road = $method['Road'];
    $country = $method['Country'];

    $intnisn = (int) $nisn;
    $intage = (int) $age;
    mysqli_query($db_conn,"INSERT INTO identity_data VALUES ('$name',$intage,'$email',$intnisn,'$city','$road','$country','$instantion');");
   
    return mysqli_affected_rows($db_conn);


}

?>