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
      position: fixed;
      --df-messenger-font-color: #000;
      --df-messenger-font-family: 'Google Sans', sans-serif;
      --df-messenger-chat-background: #f3f6fc;
      --df-messenger-message-user-background: #d3e3fd;
      --df-messenger-message-bot-background: #fff;
      bottom: 16px;
      right: 16px;
    }
  </style>
</head>
<body>

  <header>
    <img src="https://claudia.appsicam.net/ClaudIA-conlogo-mini.png" alt="Chatbot" class="bot-logo" />
    <h1>Bienvenido al Chatbot de CCSM</h1>
    <p>Estoy aquí para ayudarte con tus dudas, consultas o procesos. Puedes comenzar a chatear conmigo en cualquier momento.</p>
  </header>

  <df-messenger
    location="us-east1"
    project-id="co-ccsm-cld-01"
    agent-id="8059586e-9101-4ca6-b60e-e5161acd0519"
    language-code="es"
    max-query-length="-1"
    allow-feedback="all">
    <df-messenger-chat-bubble chat-title="chatbot-site-dev">
    </df-messenger-chat-bubble>
  </df-messenger>

  <script>
    window.addEventListener('dfMessengerLoaded', function () {
      const dfMessenger = document.querySelector('df-messenger');
      const shadowRoot = dfMessenger.shadowRoot;
      const chatIcon = shadowRoot.querySelector('df-messenger-chat-bubble');
      if (chatIcon) {
        chatIcon.click(); // Abre el chat automáticamente
      }
    });
  </script>

</body>
</html>
