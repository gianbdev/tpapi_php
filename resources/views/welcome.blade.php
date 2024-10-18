<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Estilos opcionales para el botón */
        .api-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff; /* Color azul */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .api-button:hover {
            background-color: #0056b3; /* Color azul más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la API</h1>
        <p>Esta es la página de bienvenida de tu API.</p>

        <!-- Botón que redirige a la documentación de Swagger -->
        <a href="{{ url('/api/documentation') }}" class="api-button">
            <i class="fas fa-book"></i> Documentación de la API
        </a>
    </div>
</body>
</html>
