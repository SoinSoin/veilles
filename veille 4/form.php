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
  <div class="row">
    <form class="col s12" method="post" action="envoi.php">
      <div class="row">
        <div class="input-field ">
          <input id="input_text" type="text" data-length="30 "  name="crypt">
          <label for="input_text">Password_crypt</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field ">
          <input id="input_text" type="text" data-length="30" name="hash">
          <label for="input_text">Password_hash</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field ">
          <input id="input_text" type="text" data-length="30"  name="salt">
          <label for="input_text">Password_salt</label>
        </div>
      </div>
  </div>
  <button class="waves-effect waves-light btn-large" type="submit" name="action">Envoi
    <i class="material-icons right">send</i>
  </button>
<p>
  <?php
    if($cryptt==null && $hasch==null && $sallt==null){
        echo "NOP !!!";
      
     }
  ?>
  </p>  
  </form>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>