<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $source_text = $_POST['text'];
    $source_lang = $_POST['source_lang'];
    $target_lang = $_POST['target_lang'];

    // Realizar la traducción simulada (mostrar el texto original como resultado)
    $translation = simulateTranslation($source_text, $source_lang, $target_lang);

    // Mostrar la traducción al usuario
    echo "<div class='container'>";
    echo "<h1>Resultado de la Traducción</h1>";
    echo "<h2>Texto original ($source_lang):</h2>";
    echo "<p>$source_text</p>";
    echo "<h2>Traducción ($target_lang):</h2>";
    echo "<p>$translation</p>";
    echo "<a href='index.php'><button>Volver al Traductor</button></a>";
    echo "</div>";
} else {
    header("Location: index.php");
    exit();
}

// Función para simular la traducción (mostrar una traducción simulada del texto "hola")
function simulateTranslation($text, $source_lang, $target_lang) {
    // Simular la traducción del texto "hola" en el idioma seleccionado como destino
    $translation = [
        'es' => 'hola',
        'en' => 'hello',
        'fr' => 'bonjour'
    ];

    // Verificar si el texto está en el array de traducciones simuladas
    if (isset($translation[strtolower($text)]) && $translation[strtolower($text)] !== '') {
        return $translation[strtolower($text)];
    }

    // Si no está en el array, simplemente devolvemos el texto original
    return $text;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Traductor de Texto</title>
    <style>
        /* Estilos para el resultado de la traducción */
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

        h2 {
            margin-top: 20px;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
</body>
</html>
