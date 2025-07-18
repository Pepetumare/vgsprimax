<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContactoMail;

class ContactoController extends Controller
{
    /**
     * Almacena los datos del formulario y envía el correo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Validar todos los datos del formulario, incluyendo los nuevos campos
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:20',
            'modelo_casa'   => 'nullable|string|max:255', // ✔️ Valida el modelo
            'plano_adjunto' => 'nullable|file|mimes:pdf,jpg,png,dwg,zip|max:5120', // ✔️ Valida el archivo (opcional, 5MB máx)
            'message'       => 'required|string|max:2000'
        ]);

        // 2. Preparar los datos y procesar el archivo si existe
        $data = $validatedData;
        $attachmentPath = null;

        if ($request->hasFile('plano_adjunto')) {
            $archivo = $request->file('plano_adjunto');

            // Obtenemos la ruta real del archivo subido temporalmente
            $attachmentPath = $archivo->getRealPath();
            
            // Añadimos el nombre original del archivo a los datos para usarlo en la plantilla y el Mailable
            $data['nombre_archivo'] = $archivo->getClientOriginalName();
        }

        // 3. Enviar el correo electrónico, pasando los datos y la ruta del adjunto
        Mail::to('contacto@vgsprimax.cl')->send(new FormularioContactoMail($data, $attachmentPath));

        // 4. Devolver una respuesta exitosa para el script del formulario
        return response('OK', 200);
    }
}