<?php 

    if($_POST['accion'] == 'crear'){
        //Crear nuevo registro en la base de datos

        require_once('../funciones/bd.php');

        //Validar las entradas
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
        $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
        try{
            $stmt = $conection->prepare("INSERT INTO contactos (nombre,empresa,telefono) VALUES (?,?,?)");
            $stmt->bind_param("sss", $nombre,$empresa,$telefono);
            $stmt->execute();

            if($stmt->affected_rows == 1){
                $respuesta = array(
                    'respuesta' => 'correcto',
                    
                    'datos' => array(
                        'nombre' => $nombre,
                        'empresa' => $empresa,
                        'telefono' => $telefono,
                        'id_insertado' => $stmt->insert_id
                    )
                );
            }
            

            $stmt->close();
            $conection->close();
        }catch(Exception $e){
            $respuesta = array(
                $error => $e->getMessage()
            );
        }


        echo json_encode($respuesta);
    }
    
?>