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
            flex-direction: column;
        }
        nav {
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
            display: flex;
            justify-content: space-around;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 1em;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="vistaResultados.php">Resultados</a>
        <a href="vistaVotacion.php">Votar</a>
        <a href="logout.php">Cerrar Sesión</a>
    </nav>

</body>
</html>
