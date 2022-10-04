<?php
try{
	$con=new PDO("mysql:host=$localhost;dbname=table", "root","");
}catch(PDOExection $e){
	echo $e->getMessage();
}
?>