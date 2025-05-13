<?php
// Configuración
$feedback_email = "ia@ccsm.org.co";
$company_name = "CCSM Investigación y Desarrollo";
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
    </head>
    <body class="bg-gray-100 text-gray-800">
        <!--  <header class="bg-white shadow p-6">
            <div class="max-w-4xl mx-auto">
              <h1 class="text-3xl font-bold">Asesor Virtual</h1>
              <p class="text-sm text-red-600 mt-1"><?= $warning_message ?></p>
            </div>
          </header>-->

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
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Interacción con el Asesor Virtual</h2>
                <div class="h-96 bg-gray-50 rounded border border-gray-300 p-4 overflow-y-auto" id="chatBox">
                    <!-- Mensajes del chat -->
                </div>
                <div class="mt-4 flex">
                    <input type="text" id="userInput" class="flex-grow p-2 border border-gray-300 rounded-l" placeholder="Escribe tu mensaje...">
                    <button onclick="enviarMensaje()" class="bg-blue-600 text-white px-4 py-2 rounded-r hover:bg-blue-700">Enviar</button>
                </div>
            </div>

            <div class="mt-10 text-center">
                <h3 class="text-lg font-semibold mb-2">¿Tienes comentarios?</h3>
                <button onclick="document.getElementById('feedbackModal').classList.remove('hidden')" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Enviar retroalimentación</button>
                <p class="text-sm text-gray-600 mt-2">Toda la información recolectada será utilizada para mejorar la versión final del asesor virtual.</p>
            </div>
        </main>

        <!-- Modal -->
        <div id="feedbackModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
                <h2 class="text-xl font-semibold mb-4">Formulario de Retroalimentación</h2>
                <form method="POST" action="procesar_feedback.php" onsubmit="return closeModal()">
                    <label class="block mb-2">¿Tu experiencia fue:</label>
                    <div class="flex space-x-4 mb-4">
                        <label class="flex items-center">
                            <input type="radio" name="tipo" value="positiva" required class="mr-2"> Positiva
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="tipo" value="negativa" required class="mr-2"> Negativa
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="tipo" value="neutral" required class="mr-2"> Neutra
                        </label>
                    </div>
                    <textarea name="comentario" required placeholder="Escribe tu comentario aquí..." class="w-full p-2 border border-gray-300 rounded mb-4"></textarea>
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="document.getElementById('feedbackModal').classList.add('hidden')" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancelar</button>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="text-center mt-12 py-6 text-sm text-gray-500">
            <?= $company_name ?> &copy; <?= $year ?>. Entorno de pruebas.
        </footer>

        <script>
            //    function sendMessage() {
            //      const input = document.getElementById('userInput');
            //      const chatBox = document.getElementById('chatBox');
            //      const message = input.value.trim();
            //      if (!message) return;
            //
            //      const userMsg = document.createElement('div');
            //      userMsg.className = 'mb-2 text-right';
            //      userMsg.innerHTML = `<span class='bg-blue-200 px-3 py-1 rounded inline-block'>${message}</span>`;
            //      chatBox.appendChild(userMsg);
            //      input.value = '';
            //
            //      const botReply = document.createElement('div');
            //      botReply.className = 'mb-2 text-left';
            //      botReply.innerHTML = `<span class='bg-gray-200 px-3 py-1 rounded inline-block'>Gracias por tu mensaje. El sistema está en modo de pruebas.</span>`;
            //      setTimeout(() => chatBox.appendChild(botReply), 800);
            //
            //      chatBox.scrollTop = chatBox.scrollHeight;
            //    }




            function closeModal() {
                document.getElementById('feedbackModal').classList.add('hidden');
                return true;
            }
        </script>


        <script>

            const sendMessage = async (userMessage) => {
                const chatBox = document.getElementById('chatBox');

                // Mostrar mensaje del usuario
                const userReply = document.createElement('div');
                userReply.className = 'mb-2 text-right';
                userReply.innerHTML = `<span class='bg-blue-200 px-3 py-1 rounded inline-block'>${userMessage}</span>`;
                chatBox.appendChild(userReply);

                // Preparar datos para enviar al backend
                const formData = new FormData();
                formData.append("prompt", userMessage);
                formData.append("engine", "openai"); // o "huggingface"

                // Enviar al backend
                try {
                    const response = await fetch('process.php', {
                        method: 'POST',
                        body: formData
                    });

                    const data = await response.json();
                    const botMessage = data.response || 'Error procesando la respuesta.';

                    const botReply = document.createElement('div');
                    botReply.className = 'mb-2 text-left';
                    botReply.innerHTML = `<span class='bg-gray-200 px-3 py-1 rounded inline-block'>${botMessage}</span>`;
                    chatBox.appendChild(botReply);
                } catch (error) {
                    console.error('Error:', error);
                    const errorReply = document.createElement('div');
                    errorReply.className = 'mb-2 text-left text-red-600';
                    errorReply.textContent = 'Error de conexión con el servidor.';
                    chatBox.appendChild(errorReply);
                }
            };

            function enviarMensaje() {
                const input = document.getElementById('userInput');
                const chatBox = document.getElementById('chatBox');
                const message = input.value.trim();
                if (!message)
                    return;

//                const userMsg = document.createElement('div');
//                userMsg.className = 'mb-2 text-right';
//                userMsg.innerHTML = `<span class='bg-blue-200 px-3 py-1 rounded inline-block'>${message}</span>`;
//                chatBox.appendChild(userMsg);
//                input.value = '';

                sendMessage(message);

            }


        </script>
        <?php include "google_chatbot.php" ?>

    </body>
</html>
