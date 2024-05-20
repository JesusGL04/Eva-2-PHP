<?php
include_once ("controladorResultados.php");
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        .question {
            margin-bottom: 20px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .description {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .votes {
            margin-bottom: 5px;
        }
        .votes span {
            font-weight: bold;
        }
        .no-results {
            text-align: center;
            font-size: 1.2em;
            color: #555;
        }
    </style>
</head>
<body>

<?php require "menu.php" ?>

<br>
<br>


<div class="container">
    <?php
    if ($result->num_rows > 0) {
        // Mostrar los resultados
        while($row = $result->fetch_assoc()) { 
            echo "<div class='question'>";
            echo "<div class='description'>" . $row["descripcion"] . "</div>";
            echo "<div class='votes'>Votos a favor: <span>" . $row["votos_si"] . "</span></div>";
            echo "<div class='votes'>Votos en contra: <span>" . $row["votos_no"] . "</span></div>";
            echo "</div>";
        }
    } else {
        echo "<div class='no-results'>No se encontraron preguntas con esos IDs.</div>";
    }
    ?>
</div>

</body>
</html>
