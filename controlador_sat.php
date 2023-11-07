<?php
    //echo "¡El controlador está funcionando!";
    if(isset($_POST['registro'])){
            $rfc = $_POST['rfc'];
            $periodo = $_POST['periodo'];
            $fecha = $_POST['fecha'];
            $nombres = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];

        //base de dato
            $servername = "localhost";
            $username = "id20354909_cdga";
            $password = "Cdga3454!";
            $dbname = "id20354909_eluwu";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

        // Insertar datos en la tabla 'sat'
        $sql = "INSERT INTO sat (rfc, mes, dia, nombre, tel, correo)
        VALUES ('$rfc', '$periodo', '$fecha', '$nombre', '$telefono', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Nuevo registro creado con éxito";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        $conn->close();
    }
?>