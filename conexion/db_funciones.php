<?php
    class DB_Funciones {
     
        private $db;
        
        function __construct() {
            require_once("db_conexion.php");
            $this->db = new DB_CONEXION();
            $this->db->connect();
        }
      
        public function closeConnect(){
            $this->db->close();  
        }
        
        //Funcion para consultar los últimos twitts con base en el número especificado y los muestra en el TextArea
        public function consultaDatos($limit){
      
            $query= "SELECT *
                        FROM comment c, user u
                        WHERE c.user_iduser = u.iduser
                        ORDER BY idcomment DESC
                        LIMIT $limit";
            
            $res = mysqli_query( $this->db->connect(), $query );
            
            $nro = mysqli_num_rows($res);
            
            if( $nro > 0 ) 
            {               
                while ( $row = mysqli_fetch_assoc( $res ) ) 
                {
                    $arreglo[]= $row;
                }
                return $arreglo;
            }else{
                return false;
            } 
            $this->db->close();
        }


        //Funcion para consultar los usuarios y cargarlos en el Select Option
        public function cargarUsuario(){

            $query_user= "SELECT *
                            FROM user";
            
            $res_user = mysqli_query( $this->db->connect(), $query_user );
            
            $nro_user = mysqli_num_rows($res_user);
            
            if( $nro_user > 0 ) 
            {               
                while ( $row_user = mysqli_fetch_assoc( $res_user) ) 
                {
                    $arreglo_user[]= $row_user;
                }
                return $arreglo_user;
            }else{
                return false;
            } 
            $this->db->close(); 
        }
        
        //Funcion para insertar un nuevo Twitt
        public function insertarTwitter($user,$text){         
        
            $date = date('D M d H:i:s +0000 Y');
            $query_insTwitter = "INSERT INTO comment(created, text, user_iduser)
                                VALUES('$date', '$text', $user)";
        
            $sql_insTwitter = mysqli_query($this->db->connect(),$query_insTwitter);
            
            if ($sql_insTwitter) {
                return true;
            }else {
                return false;
            }
        }
    }
?>