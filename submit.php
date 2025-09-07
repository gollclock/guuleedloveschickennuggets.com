<?php
$secret = '6Lc_WMErAAAAAPVHQQjvtlCbX5zIfPj5NpgMquJl'; // ← Put your secret key here
$response = $_POST['g-recaptcha-response'];
$remoteip = $_SERVER['REMOTE_ADDR'];

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
$captcha_success = json_decode($verify);

if ($captcha_success->success) {
    echo "CAPTCHA passed!";
} else {
    echo "CAPTCHA failed.";
}
?>
