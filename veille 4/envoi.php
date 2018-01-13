<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="style.css" media="screen,projection" />
</head>

<div class="card-panel">
<p>
<?php
   error_reporting(E_ALL);
   ini_set('display_errors','On');
  
   $BDD = "host=localhost port=5432 dbname=mdp user=admin  password=admin";
  $connect = pg_connect($BDD);
    
    $cryptt = $_POST ['crypt'];
    $hasch = $_POST ['hash'];
     $sallt = $_POST ['salt'];

     if($cryptt==null && $hasch==null && $sallt==null){
      //  echo "NOP !!!";
      header('Location: form.php');
     }
     else{ 
     $inserBDD = pg_query("INSERT INTO modpa (hach, crypt, salt ) VALUES ('".$hasch."' ,  '".$cryptt."', '".$sallt."');");
      echo "Envoyé !";
     }
  ?> 
  </p>
<a href="http://localhost/phppgadmin/">Accés BDD</a> 
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>