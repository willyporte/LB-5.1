<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Password Reminder Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    "credentials" => array(
        "invalid" => "El usuario y/o contraseña no es válido",
    ),

    "password" => "Las contraseñas deben contener al menos 6 caracteres y coincidir.",

    "user"     => "No podemos encontrar a un usuario con ese correo electrónico.",

    "token"    => "Este token de recuperación de contraseña es inválido.",

    "sent"     => "¡Recordatorio de contraseña enviado!",

    "reset"    => "Su contraseña ha sido restablecida!",

    'email_subject' => "Recupera tu contraseña",

    'reset' => array(
        'current_password' => 'Contraseña actual',
        'new_password' => 'Nueva contraseña',
        'password_confirmation' => 'Confirma tu contraseña',
        'change_button' => 'Cambiar contraseña',
    ),
);
