<?php


	//  error_reporting(E_ALL);

	//  ini_set('display_errors','On');

	

	$BDD = "host=localhost port=5432 dbname=bdd_meteon user=admin  password=admin";
	$connect = pg_connect($BDD);

    $oui=pg_query("SELECT nom, prenom FROM utilisateur ; ");
    //  $result=pg_fetch_array($oui);
    //  print_r( $result[0]$result[1]);
    //  echo "$result[0]$result[1]";
  while($result=pg_fetch_array($oui) ){ 
  echo "$result[0] $result[1] <br/>";
}
?>

