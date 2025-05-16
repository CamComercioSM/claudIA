<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <title>My chat</title>
        <style>
            df-messenger {
                z-index: 999;
                position: fixed;
                --df-messenger-font-color: #000;
                --df-messenger-font-family: Google Sans;
                --df-messenger-chat-background: #f3f6fc;
                --df-messenger-message-user-background: #d3e3fd;
                --df-messenger-message-bot-background: #fff;
                bottom: 0;
                right: 0;
                top: 0;
                width: 350px;
            }
        </style>
        <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
        <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>
    </head>
    <body>
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

</body>
</html>