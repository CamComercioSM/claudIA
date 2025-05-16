<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Chatbot CCSM</title>

        <!-- Estilos del chatbot -->
        <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
        <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>

        <!-- Estilos personalizados -->
        <style>
            body {
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(to bottom right, #f1f4f9, #e2eafc);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                text-align: center;
            }

            header {
                padding: 40px 20px 20px;
            }

            .bot-logo {
                width: 120px;
                height: auto;
                border-radius: 50%;
                margin-bottom: 20px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                font-size: 2.5rem;
                margin-bottom: 10px;
                color: #333;
            }

            p {
                font-size: 1.1rem;
                color: #555;
                max-width: 600px;
                margin: 0 auto;
            }

            df-messenger {
                z-index: 999;

                --df-messenger-font-color: #000;
                --df-messenger-font-family: Google Sans;
                --df-messenger-chat-background: #f3f6fc;
                --df-messenger-message-user-background: #d3e3fd;
                --df-messenger-message-bot-background: #fff;
                --df-messenger-width: 400px;
                --df-messenger-max-width: 400px;
                --df-messenger-chat-height: 500px;

                height: 400px !important;
                width: 100%;
            }
        </style>
    </head>
    <body>

        <header>
            <img src="https://claudia.appsicam.net/ClaudIA-conlogo-mini.png" alt="Chatbot" class="bot-logo" />
            <h1>Bienvenido al Chatbot de CCSM</h1>
            <p>Estoy aquí para ayudarte con tus dudas, consultas o procesos. Puedes comenzar a chatear conmigo en cualquier momento.</p>
        </header>

        <main class="max-w-4xl mx-auto mt-10 p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Interacción con el Asesor Virtual</h2>
                <div class="h-96 bg-gray-50 rounded border border-gray-300 p-4 overflow-y-auto" id="chatBox">

                    <df-messenger
                        location="us-east1"
                        project-id="co-ccsm-cld-01"
                        agent-id="8059586e-9101-4ca6-b60e-e5161acd0519"
                        language-code="es"
                        max-query-length="-1"
                        allow-feedback="all">
                        <df-messenger-chat
                            chat-title="chatbot-site-dev">
                        </df-messenger-chat>
                    </df-messenger>


                </div>
            </div>

            <div class="mt-10 text-center">
                <h3 class="text-lg font-semibold mb-2">¿Tienes comentarios?</h3>
                <button onclick="document.getElementById('feedbackModal').classList.remove('hidden')" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Enviar retroalimentación</button>
                <p class="text-sm text-gray-600 mt-2">Toda la información recolectada será utilizada para mejorar la versión final del asesor virtual.</p>
            </div>
        </main>


    </body>
</html>
