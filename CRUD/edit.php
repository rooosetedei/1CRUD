<?php

include_once("connect.php");

if(!$id = isset($_GET['nisn'])){

    header("location:index.php?pesan=mau_ngapain_jir?");
    exit;
}



else{   
    $id = isset($_GET['nisn'])?$_GET['nisn']:0;
}

$query_sqlku = mysqli_query($db_conn,"SELECT * FROM identity_data WHERE NISN='$id'");

if(mysqli_num_rows($query_sqlku) == 0 ){

    header("location:index.php?pesan=mau_ngapain_jir?");
    exit;
}
?>

<html
lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Edit-Data</title>
    <style>
        body{
            transition: opacity 1s ease-in;
            opacity: 0;
        }
        body.load_edit{
            background: url("img/school.jpg");
            background-size: cover;
            background-attachment: fixed;
            opacity: 1;
        }
        .container-form{
            margin: 70px;
             border: 2px solid blue;
             border-radius: 20px;
             background:linear-gradient(to bottom,rgba(206, 131, 253, 0.868),rgba(152, 172, 223, 0.667));

        }
        .form{
            border: 2px solid rgba(red, green, blue,grey);
            margin: 40px;
            padding: 30px;
            border-radius: 20px;
            background:linear-gradient(to bottom,rgba(222, 181, 255, 0.87),rgba(152, 172, 223, 0.667));
        }
        input{
            padding: 5px;
            border: 1px solid blue;
            border-radius: 20px;
        }
        label{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }
        .button{
            
            border-radius: 20px;
            padding: 15px;
            margin: 0 auto;
            justify-content: center;
            text-align: center;
        }
        .button:active{
            background-color: black;
            color: aqua;
        }

        .button_div{
            text-align: right;
        }
        #button_submit{
            margin-right: 40px;
        }

    
    </style>
</head>
<body onload="document.body.classList.add('load_edit')">
    <main>
        <section class="container-form">
            <?php while($mydata = mysqli_fetch_assoc($query_sqlku)):?>
            <form action="update.php" method="post" class="form">
                <label class="lable_input"  for="Name">Name : </label><input type="text" require name="name" id="Name" value="<?= $mydata["Name"];?>">
                <br><br> 
                <label  class="lable_input" for="Age">Age : </label><input type="numeric" minlength="1" min="1" max="80" maxlength="2" require name="age" id="Age" value="<?= $mydata['Age'];?>">
                <br><br>
                <label class="lable_input"  for="email">Email : </label><input type="email"  require name="email" id="email" value="<?=$mydata['Email'];?>">
                <br><br> 
                <input type="hidden" require name="nisn" id="nisn" minlength="10" maxlength="10" value="<?= $mydata['NISN']?>">
                
                <label class="lable_input"  for="city">City : </label><input type="text" require name="city" id="city" value="<?= $mydata['City']?>">
                <br><br> 
                <label  class="lable_input" for="road">Road : </label><input type="text" require name="road" id="road" value="<?= $mydata['Road']?>">
                <br><br>
                <label class="lable_input"  for="country">Country : </label><input type="text" require name="country" id="country" value="<?= $mydata['Country']?>">
                <br><br> 
                <label  class="lable_input" for="instantion">Instantion : </label><input type="text" require name="instantion" id="instantion" value="<?= $mydata['instantion']?>">
                <br><br>
                <div class="button_div">
                <input type="submit" class="button" id="button_submit" value="Save" >
                
                <a href="admin.php">

                    <input class="button" type="button" value="cancel">
                
                </a>
                </div>
            </form>
            <?php endwhile;?>
        </section>
        <section>

        </section>
    </main>
    

</body>

</html><?php

?>
