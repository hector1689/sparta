<?php 
if (!$_COOKIE["idioma_solicitado"]){
	header("location: pedir-idioma.php");
	
} else if($_COOKIE["idioma_solicitado"]== "es"){
	header("location: espanol.php");

}else if($_COOKIE["idioma_solicitado"]== "en"){
	header("location: ingles.php");
}
?>