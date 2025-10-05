<?php
    require "connect.php";
 if(isset($_POST['submit'])){

    $nisn = $_POST['Nisn'];
    $check = mysqli_query($db_conn,"SELECT * FROM identity_data WHERE NISN='$nisn';");
    if(mysqli_num_rows($check) > 0){
          echo "
        <script>
        alert('Gunakan NISN Lain');
        document.location.href = 'index.php'
        </script>
        
        ";

    }else{
        if(insert($_POST)> 0){

        echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'admin.php'
        </script>
        
        ";

    }else{
        echo "
        <script>
        alert('Data gagal Ditambahkan');
        document.location.href = 'index.php'
        </script>
        
        ";
    }
    }
    
 }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta  name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Formulir</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body onload="document.body.classList.add('loaded');">
    <div class="container_main">    
    <header>
        <a href="">
        <img class="miaw" src="img/miaw.jpg" alt="miaw" title="Meoow">
        </a>
        <h1 class="judul-header">IDENTITY FORM</h1>
        </header>

    
        <form action="" method="post">
            
            <fieldset>
                <legend><h2 class="judul">Identity</h2></legend>
                <label for="Name" class="form_in">Name : </label><input class="fill_form" type="text" name="Name" id="Name" required><br><br>
                <label for="Age" class="form_in">Age : </label><input class="fill_form"  type="number" name="Age" id="Age" max="100"   min="1" required><br><br>
                <label for="Email" class="form_in">Email : </label><input class="fill_form"  type="email" name="Email" id="Email" required><br><br>
                <label for="Instantion" class="form_in">Instantion : </label><input class="fill_form"  type="text" name="Instantion" id="Instantion" 
                ><br><br>
                <label for="nisn" class="form_in">NISN :</label><input class="fill_form"type="number" minlength="10" maxlength="10" name="Nisn" id="nisn">
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend><h2 class="judul">Address</h2></legend>
                <label for="City" class="form_in">City : </label><input class="fill_form"  type="text" name="city" id="City" required><br><br>
                <label for="Road"class="form_in">Road : </label><input  class="fill_form"  type="text" name="Road" id="road" required><br><br>
                <label for="Country" class="form_in">Country : </label>
                <select name="Country" id="Country" class="fill_form" >
                    <option value="Indonesia">Indonesia</option>
                    <option value="other">
                        other
                       
                    </option>
                    
                </select>

            </fieldset>
            <br>
            
            <div class="button">
            <p style="text-align: center;"><a href="admin.php">Available List</a></p>
            <input class= "reset"type="reset" name="reset" id="Reset" value="RESET">
           <button class="submit" type="submit" name="submit">
            submit

           </button>

            </div>
        </form>
    </div>
    </body>
</html>
