<?php

include_once ("conexionBaseDatos.php");


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Paso 2: Consultar las preguntas de la base de datos
$sql = "SELECT id_pregunta, descripcion, votos_si AS aFavor, votos_no AS enContra FROM preguntas";
$result = $conn->query($sql);



// Verificar si se han marcado las casillas de voto a favor o en contra
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Si se ha pulsado Si.
    if (isset($_POST['aFavor'])) {
        $id_pregunta = $_POST['pregunta'];

        // Actualizar votos a favor
        $sqlSi = "UPDATE preguntas SET votos_si = votos_si + 1 WHERE id_pregunta = '$id_pregunta'";

        //Si se realiza la sentencia
        if ($conn->query($sqlSi) === TRUE) {
          //Se actualiza
        }
    }


    //Si se ha pulsado No.
    elseif (isset($_POST['enContra'])) {
        $id_pregunta = $_POST['pregunta'];

        // Actualizar votos en contra
        $sqlNo = "UPDATE preguntas SET votos_no = votos_no + 1 WHERE id_pregunta = '$id_pregunta'";

        //Si se realiza la sentencia
        if ($conn->query($sqlNo) === TRUE) {
            //Se actualiza
        }
    }

}
?>