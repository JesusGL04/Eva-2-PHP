
<?php
include_once ("modeloVotacion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<script>

function votar() {

//obtenemos elemento por id (en este caso "formulario")
var formData = new FormData(document.getElementById("formulario"));

//apunta al fichero que se va a dedicar a actualizar la base de datos.
fetch("modeloVotacion.php", {
    method: "POST",
    body: formData
})

//si no hay respuesta con el servidor, se escribe el siguiente mensaje
.then(response => {
    if (!response.ok) {
        throw new Error('Error en el servidor');
    }
    // se devuelve el error
    return response.json();
})

//Si hay respuesta se pone en marcha tambien la siguiente funcion(en este caso se pondra en marcha la funcion "manejarVoto")
.then(jsonData => {
    manejarVoto(jsonData);
})

//Si hay un error se muestra el siguiente mensaje
.catch(error => {
    console.error('Hubo un error:', error);
});
}


</script>
	
</body>
</html>