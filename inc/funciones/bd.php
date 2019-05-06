<?php  
    //Credenciales de la base de datos
    define('DB_USUARIO', 'root');
    define('DB_PASSWORD','12345Jajaje');
    define('DB_HOST','localhost');
    define('DB_NOMBRE','agendaPHP');

    $conection = new mysqli(DB_HOST,DB_USUARIO,DB_PASSWORD,DB_NOMBRE);

    //echo $conection->ping();
?>