

<?php
 
// require_once "../config/config.php";
//require "../phpintegrador1/config/config.php";
require_once 'config.php';
// phpintegrador1/config/config.php
class conections{

    public static function conect(){


       // echo "Conexion!!!: "; 
                // $conexionMysql = new mysqli($servidor,$usuario,$clave, $base_datos);
                 $conexionMysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME);

                 $conexionMysql->set_charset('utf8'); 
             
                 if ($conexionMysql->connect_error) {
                    echo "Error de conexión: " . $conexionMysql->connect_error ;
                    return null;
                }else{
                     echo "Conexión exitosa"; 
                     return $conexionMysql;
                }

                    
}



}

// function imprimirConexion(){

//     return echo "<br> <br> Hola desde conexion:  <br> ";
// }
?>



