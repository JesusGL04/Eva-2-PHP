<?php
include_once ("controladorVotacion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        select, input[type="button"] {
            margin-bottom: 20px;
        }
        select {
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .checkbox-container input {
            margin-right: 10px;
            transform: scale(1.2);
        }
        input[type="button"] {
            padding: 15px;
            border: none;
            border-radius: 6px;
            background-color: #28a745;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="button"]:hover {
            background-color: #218838;
        }
        #votacion {
            text-align: center;
            font-size: 1.4em;
            color: #555;
        }
    </style>
</head>
<body>

<?php require "menu.php" ?>
<br>
<br>

<div class="container">
    <form id="formulario">
        <label for="pregunta">Selecciona una pregunta:</label>
        <select name="pregunta" id="pregunta">
            <?php
            // Iterar sobre las preguntas y agregarlas al elemento desplegable
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id_pregunta"] . "'>" . $row["descripcion"] . "</option>";
                }
            } else {
                echo "<option>No se encontraron preguntas en la base de datos.</option>";
            }
            ?>
        </select>
        
        <div class="checkbox-container">
            <input type="checkbox" value="votoSi" name="aFavor">
            <label for="aFavor">A favor</label>
        </div>
        
        <div class="checkbox-container">
            <input type="checkbox" value="votoNo" name="enContra">
            <label for="enContra">En contra</label>
        </div>
        
        <input type="button" value="Enviar" onclick="votar()">
    </form>
</div>

</body>
</html>
