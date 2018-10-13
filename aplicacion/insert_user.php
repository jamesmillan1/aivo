<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("../conexion/db_funciones.php");
	$db = new DB_Funciones(); 
    
    $user   = $_POST['user'];
	$text   = $_POST['text'];

    $insertar = $db->insertarTwitter($user,$text);

    if( $insertar ){
		echo "success";
    }else{
		echo "error";
	}

?>
