<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormularioContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Los datos del formulario.
     * @var array
     */
    public $data;

    /**
     * La ruta del archivo a adjuntar (opcional).
     * @var string|null
     */
    public $attachmentPath; // ✔️ 1. Añadimos esta nueva propiedad

    /**
     * Crea una nueva instancia del mensaje.
     *
     * @param array $data
     * @param string|null $attachmentPath
     * @return void
     */
    // ✔️ 2. Modificamos el constructor para que acepte la ruta del archivo
    public function __construct(array $data, ?string $attachmentPath = null)
    {
        $this->data = $data;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Construye el mensaje.
     *
     * @return $this
     */
    public function build()
    {
        // ⚙️ 3. Modificamos el método build para adjuntar el archivo
        
        // Primero, creamos el correo base con la vista y el asunto
        $email = $this->view('emails.contacto')
                      ->subject('Nueva Solicitud de Cotización - ' . $this->data['name']);

        // Luego, si existe una ruta de archivo, lo adjuntamos
        if ($this->attachmentPath) {
            $email->attach($this->attachmentPath, [
                'as' => $this->data['nombre_archivo'], // Usa el nombre original del archivo
            ]);
        }

        // Finalmente, retornamos el objeto del correo
        return $email;
    }
}