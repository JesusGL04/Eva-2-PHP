<?php

include_once ("conexionBaseDatos.php");


// Construir la consulta SQL
$resultados = "SELECT id_pregunta, descripcion, votos_si, votos_no FROM preguntas";

// Ejecutar la consulta
$result = $conn->query($resultados);



/*$arrayResultados=[
    "preguntasYrespuestas" => $resultados
];

echo json_encode($arrayResultados);
*/

?>