<?php
$detect = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($detect === 'en') {
    include('./includes/lang/en.php');
}
elseif ($detect === 'ar') {
    include('./includes/lang/ar.php'); // Include Arabic language file
}
elseif ($detect === 'de') {
    include('./includes/lang/de.php'); // Include German language file
}
elseif ($detect === 'fr') {
    include('./includes/lang/fr.php'); // Include French language file
}
elseif ($detect === 'it') {
    include('./includes/lang/it.php'); // Include Italian language file
}
elseif ($detect === 'jp') {
    include('./includes/lang/jp.php'); // Include Japanese language file
}
elseif ($detect === 'kr') {
    include('./includes/lang/kr.php'); // Include Korean language file
}
elseif ($detect === 'es') {
    include('./includes/lang/es.php'); // Include Spanish language file
}
elseif ($detect === 'ru') {
    include('./includes/lang/ru.php'); // Include Russian language file
}
elseif ($detect === 'cn') {
    include('./includes/lang/cn.php'); // Include Chinese language file
}
elseif ($detect === 'in') {
    include('./includes/lang/in.php'); // Include Indian language file
}
elseif ($detect === 'pt') {
    include('./includes/lang/pt.php'); // Include Portuguese language file
}
elseif ($detect === 'he') {
    include('./includes/lang/he.php'); // Include Hebrew language file
}
elseif ($detect === 'nl') {
    include('./includes/lang/nl.php'); // Include Dutch language file
}
elseif ($detect === 'tr') {
    include('./includes/lang/tr.php'); // Include Turkish language file
}
else {
    include('./includes/lang/en.php'); // Default to English for unsupported languages
}
?>
