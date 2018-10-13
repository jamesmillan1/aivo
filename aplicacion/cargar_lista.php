<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("../conexion/db_funciones.php");
	$db = new DB_Funciones(); 
    
    $return_arr = array();
    $arr_user   = array();

    $cargarUsuario   	= $db->cargarUsuario();

    if( $cargarUsuario != false ) 
    { 		
        for ( $i = 0; $i< sizeof($cargarUsuario); $i++ ) 
    	{
    	    $row_array['id']        = $cargarUsuario[$i]['iduser'];
    		$row_array['nombre']    = $cargarUsuario[$i]['name'];
    	    
    	    array_push($arr_user,$row_array);
    	}
    	array_push($return_arr, $arr_user);
    }else{
        error_log("Error cargando datos ");
    }

    echo json_encode($return_arr);

?>