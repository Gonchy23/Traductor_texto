<!DOCTYPE html>
<html>
<head>
    <title>Traductor de Texto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        textarea {
            resize: none;
            height: 100px;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select,
        input[type="submit"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
            color: #333;
            word-wrap: break-word;
            white-space: pre-line;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Traductor de Texto</h1>
        <form action="translate.php" method="post">
            <textarea name="text" placeholder="Ingresa el texto a traducir"></textarea>
            <select name="source_lang">
                <option value="es">Español</option>
                <option value="en">Inglés</option>
                <option value="fr">Francés</option>
            </select>
            <select name="target_lang">
                <option value="es">Español</option>
                <option value="en">Inglés</option>
                <option value="fr">Francés</option>
            </select>
            <input type="submit" value="Traducir">
        </form>
        <?php
        if (isset($_POST['text'])) {
            // Aquí va el código PHP para traducir el texto y mostrarlo
            // ...

            // Mostrar el resultado en el contenedor result
            echo '<div class="result">';
            echo 'Texto Traducido: ' . $texto_traducido;
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
