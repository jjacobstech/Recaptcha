<?php
include_once 'config.php';
function recaptcha()
{
    if (isset($_POST['g-recaptcha-response'])) {
        $response = $_POST['g-recaptcha-response'];
        if (isset($response) || empty($response)) {
            $secret_key = SECRET_KEY;
            $apiResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response);
            print_r($apiResponse);
        }
    }

}
