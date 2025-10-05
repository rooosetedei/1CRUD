<?php
if(isset($_POST['submit'])){
    if($_POST['username'] === "Hilbram" && $_POST['password'] == "123"){
        header('location:index.php');
       exit;

    }else{
        $gagal = true;
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    <style>
        body{
            margin: 0 auto;
            padding: 0 auto;
            opacity: 0;
            transition: 500ms ease-in;

        }
        body.load{
            margin: 0 auto;
            padding: 0 auto;
            opacity: 1;
            background: url(img/school.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container_form{
                font-size: 17px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                text-align: center;
               background:linear-gradient(to bottom,rgba(206, 131, 253, 0.868),rgba(152, 172, 223, 0.667));
                border: solid 2px rgb(9, 9, 120);
                border-radius: 30px;
                height: 10px auto;
                margin: 130px;
                padding: 40px;
                width: 300px;

            }
        .hero{
            justify-content: center;
            align-content: center;
            display: flex;
        }
        .input_main{
            text-align: center;
            height: 20px;
            width: 240px;
            border-radius: 30px;
        }
        .input_box{
            
            margin: 30px;
        }
        .title_form_container h2{
            color: white;
            margin: 13px;
            font-size: 30px;
        }
        .auth_issue{
            margin-top: 60px;
        }
        .login_button{
            padding: 10px;
            width: 130px;
            border-radius: 20px;
        }
    </style>
</head>
<body onload="document.body.classList.add('load');">
    <main>
        <section class="hero">
            <div class="container_form">
                <div class="title_form_container">
                    <h2>
                    LOGIN
                    </h2>
                    <?php
                    if(isset($gagal)):
                    
                    ?>
                    <p style="color: red;">username and passsword incorrect</p>
                    <?php endif;?>
                </div>
                    <form action="login.php"  method="post">
                         <div class="input_box">
                            <label for="">Username</label><br>
                                <input class="input_main" type="text" name="username" id="username" require>
                        </div>
                                     <div class="input_box">
                                         <label for="">Password</label><br>
                     
                                            <input class="input_main" type="password" name="password" id="password" require>
                                                <br>

                                                </div>
                                                <input type="submit" class="login_button"name="submit" id="Login" >
                

                    </form>
                    <div class="auth_issue">
                      <a href="">Dont Have Account ?</a>
                      <br>
                      <a href="">Forgot Password ?</a>
                      </div>
                </div>
        </section>
    </main>
</body>
</html>