<?php
// Configuración
$feedback_email = "ia@ccsm.org.co";
$company_name = "Cámara de Comercio de Santa Marta para el Magdalena";
$year = date("Y");
$page_title = "Asesor Virtual - Entorno de Pruebas";
$warning_message = "Esta es una versión de pruebas piloto. Tu retroalimentación es muy importante.";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= $page_title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>
            .contenedor-chat{
                height: 70vh;
            }
        </style>
    </head>
    <body class="bg-gray-100 text-gray-800">
        <header class="bg-white shadow p-6">
            <div class="max-w-4xl mx-auto flex items-center space-x-4">
                <!-- Imagen a la izquierda -->
                <img src="ClaudIA-conlogo-mini.png" alt="Logo" class="w-12 h-12 object-contain">

                <!-- Título y mensaje de advertencia -->
                <div>
                    <h1 class="text-3xl font-bold">Asesor Virtual</h1>
                    <p class="text-sm text-red-600 mt-1"><?= $warning_message ?></p>
                </div>
            </div>
        </header>

        <main class="max-w-4xl mx-auto mt-10 p-4">

            <div class="contenedor-chat"><?php include './google-dialogflow.php'; ?></div>


            <div class="mt-10 text-center">
                <h3 class="text-lg font-semibold mb-2">¿Tienes comentarios?</h3>
                <button onclick="document.getElementById('feedbackModal').classList.remove('hidden')" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Enviar retroalimentación</button>
                <p class="text-sm text-gray-600 mt-2">Toda la información recolectada será utilizada para mejorar la versión final del asesor virtual.</p>
            </div>
        </main>

        <footer class="text-center mt-12 py-6 text-sm text-gray-500">
            <?= $company_name ?> &copy; <?= $year ?>. Entorno de pruebas.
        </footer>


        <?php include './retroalimentacion.php'; ?>



    </body>
</html>
