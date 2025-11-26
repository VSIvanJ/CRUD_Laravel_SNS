<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">GOBIERNO REGIONAL DE CUSCO</h1>
            <h4 class="text-muted">TRABAJO FINAL</h4>
        </div>
        <hr>

        <p class="lead text-center">
            Bienvenidos, en esta página web podrán consultar lo que necesiten y tendrán la guía de un chatbot.
        </p>

        <div class="text-center mt-4">
            <a href="{{ route('Tramites.consulta') }}" class="btn btn-primary btn-lg">Estado de Trámite</a>
        </div>
    </div>
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "5c1c4963-78f6-4113-8840-c3b5ab1372c0", // The ID of this integration.
            region: "us-south", // The region your integration is hosted in.
            serviceInstanceID: "edd2757a-dc4b-48ea-b49f-91626e1753a2", // The ID of your service instance.
            onLoad: async (instance) => { await instance.render(); }
        };
        setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
            document.head.appendChild(t);
        });
    </script>

    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>