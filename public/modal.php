<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Conoce a ClaudIA</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      margin: 0;
      background-color: #f9fbfc;
      color: #222;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 900px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      display: flex;
      overflow: hidden;
      flex-wrap: wrap;
    }

    .image {
      flex: 1 1 300px;
      background: url("modal.png") no-repeat center;
      background-size: cover;
      min-height: 300px;
    }

    .content {
      flex: 1 1 400px;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    h1 {
      color: #1a202c;
      font-size: 2rem;
    }

    h1 span {
      color: #1c91c7; /* IA resaltado */
    }

    p {
      font-size: 1.1rem;
      margin: 1rem 0 2rem 0;
      line-height: 1.6;
    }

    a.button {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background-color: #e95420;
      color: white;
      font-weight: bold;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s;
    }

    a.button:hover {
      background-color: #cf471b;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .image {
        order: 2;
      }

      .content {
        order: 1;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image"></div>
    <div class="content">
      <h1>Conoce a Claud<span>IA</span></h1>
      <p>Participa en nuestra prueba piloto de inteligencia artificial para asesoría y cotización de servicios. ClaudIA está aquí para ofrecerte una experiencia más rápida, precisa y personalizada.</p>
      <a href="https://claudia.appsicam.net/" target="_blank" class="button">Quiero participar</a>
    </div>
  </div>
</body>
</html>
