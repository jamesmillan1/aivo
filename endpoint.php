<?php
    header('Content-Type: application/json');
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("conexion/db_funciones.php");
	$db = new DB_Funciones(); 
    
    $count      = $_POST['count'];
    $twitter    = array();
    
    if($count == 0){
        $count = 10;
    }
    
    $consultaDatos  = $db->consultaDatos($count);

    if( $consultaDatos != false ) 
    { 		
        for ( $i = 0; $i< sizeof($consultaDatos); $i++ ) 
    	{
    	    $reply['created_at']    = $consultaDatos[$i]['created'];
    		$reply['text']          = $consultaDatos[$i]['text'];
    	    $user['id']             = $consultaDatos[$i]['iduser'];
    		$user['name']           = $consultaDatos[$i]['name'];
    		$reply['in_reply']         = $user;
    	    array_push($twitter, $reply);
    	}
    }else{
        error_log("Error cargando datos ");
    }
    echo json_encode($twitter, JSON_PRETTY_PRINT);
?>