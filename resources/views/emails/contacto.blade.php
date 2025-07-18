<!DOCTYPE html>
<html>
<head>
    <title>Nueva Solicitud de Cotización</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #ddd; border-radius: 5px; max-width: 600px; margin: 20px auto; }
        h1 { color: #222; }
        p { margin: 10px 0; }
        strong { color: #000; }
        hr { border: 0; border-top: 1px solid #eee; }
        .message-box { background-color: #f9f9f9; padding: 15px; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nueva Solicitud de Cotización</h1>
        
        <h3>Datos del Cliente:</h3>
        <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
        <p><strong>Correo:</strong> {{ $data['email'] }}</p>
        <p><strong>Teléfono:</strong> {{ $data['phone'] }}</p>
        
        <hr>

        <h3>Detalles de la Cotización:</h3>
        
        <p><strong>Modelo de Interés:</strong> {{ $data['modelo_casa'] }}</p>
        
        @if (isset($data['nombre_archivo']))
            <p><strong>Archivo Adjunto:</strong> Sí. El archivo <strong>"{{ $data['nombre_archivo'] }}"</strong> se encuentra adjunto a este correo.</p>
        @else
            <p><strong>Archivo Adjunto:</strong> No se adjuntó ningún archivo.</p>
        @endif

        <hr>

        <p><strong>Mensaje del Cliente:</strong></p>
        <div class="message-box">
            <p>{{ $data['message'] }}</p>
        </div>
    </div>
</body>
</html>