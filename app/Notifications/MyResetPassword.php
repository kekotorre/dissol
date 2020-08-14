<?php

namespace App\Notifications;


use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetPassword extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Recuperar contraseña')
            ->greeting('Hola ' . $notifiable->name)
            ->line('Estás recibiendo este correo porque hiciste una solicitud para recuperar la contraseña de tu cuenta.')
            ->action('Recuperar contraseña', route('password.reset', $this->token))
            ->line('Si no realizaste esta solicitud, no se requiere realizar ninguna otra acción.')
            ->salutation('Saludos, '. config('app.name'));
    }

}
