<!-- I ADEKUNLE BLESSING OLAMIDE START THIS PROJECT ON THE 27TH OF JANUARY 2023 AT 3:13PM -->
<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECURED SIGN UP FORM</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
</head>
<body>
    <!-- <img src="./assets/img/image1.png" alt="" width="500">
    <img src="./assets/img/image2.png" alt="" width="500"> -->
    <div class="container">
        <div class="content">


            <div class="signup_form">
                <form action="" method="post">
                <?php include("error.php"); ?>

                    <div class="name">
                            <div class="first"><label for="name">first name</label><br>
                            <input class="ninput" name="fname" type="text" value="<?php echo $fname; ?>" placeholder="eg. John"></div>
                            
                            <div class="last"><label for="name">last name</label><br>
                                <input class="ninput" name="lname" value="<?php echo $lname; ?>" type="text" placeholder="eg. Gabriel"><br><br>
                               </div>
                        
                    </div>
                  
                    <label for="email">enter your email</label><br>
                    <input class="input" autocomplete="off" type="email" name="email" value="<?php echo $email; ?>" placeholder="eg. example@email.com"><br><br>

                    <div class="password">
                        <span id="toggle" onclick="toggle()" style="display: inherit; color: black; position:relative;  margin-left: 16.5rem; top: 55px; "> <i class="fas fa-eye"></i></span>
                        <label for="password">create a password</label><br>
                        <input id="password" autocomplete="off"  name="password" value="<?php echo $pwd; ?>" onkeyup="validatepassword(this.value);" class="input" type="password" placeholder="E.g    s@MPL@123"><br><br>
                            <SPan id="msg"></SPan>



                        <span id="tog" onclick="tog()" style="display: inherit; color: black; position:relative;  margin-left: 16.5rem; top: 55px; "> <i class="fas fa-eye"></i></span>
                        <label for="password">confirm password</label><br>
                        <input id="pass"  class="input" value="<?php echo $pwd1; ?>" name="password1" type="password" placeholder="E.g    s@MPL@123"><br><br>
                              <SPan id="msg"></SPan>

                    </div>
                    <p style="font-size: 14px;"><input name="check"  class="agree" type="checkbox" name="checkbox" id=""> I agreed to <a href="" style="color: red;">Terms & Condition</a></p>
                    
                    <input class="submit" name="submit" type="submit" value="SIGN UP">
                    
                </form>
            </div>
            <!-- <div class="login">SIGN UP</div> -->
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
</body>
</html>