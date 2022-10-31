<!doctype html>
<?php
if(isset($_POST['submit']))
$simple_string = "";
$simple_string = $_POST['e'];
$ciphering = "DES-CFB1";
$iv_length = openssl_cipher_iv_length($ciphering);
$options   = 0;
$encryption_iv = '28221537';
$encryption_key = "rogerthat";
$encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);

$archivo = fopen('encrypted.txt','a');

fputs($archivo,$encryption); 

fclose($archivo);

?>

<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Formulario </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="formulario.php" method="POST">
                <span class="login-form-title">ENCRYPTION</span>
                
                <div class="wrap-input100" data-validate = "Word incorrect">
                    <input class="input100" type="text" id="word" name="e" placeholder="Type the word to encrypt">
                    <span class="focus-efecto"></span>
                </div>
                            
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        
                        <button type ="submit" name="submit" class ="login-form-btn">ENCRYPT</button>

                    </div>
             </div> 
             <br><span class="login-form-subtitle">Your encrypted word is: </span><br>
             <p><?php echo $encryption ?></p>

            </form>
        </div>
    </div> 

    


     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>    
    </body>

