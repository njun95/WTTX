<?php
  	$connection = mysqli_connect('localhost','root', 'wttxdb');
  	if(!$connection){
  		die("Databaase Connection Failed" . mysqli_error($connection));
  	}
  	$select_db = mysqli_select_db($connection , 'test');
  	if ($select_db){
  		die("Databaase Selection Failed" . mysqli_error($connection));
  	}
?>