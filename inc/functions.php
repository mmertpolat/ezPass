<?php

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = 'AES-256-CBC';
    $secret_key = '13456';
    $secret_iv = '**445';
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if( $action == 'encrypt' ) {
        $output = urlencode(serialize(base64_encode(gzcompress(openssl_encrypt($string,$encrypt_method, $key, 0, $iv)))));
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(gzuncompress(base64_decode(unserialize(urldecode($string)))),$encrypt_method, $key, 0, $iv);
    }
    return $output;
}

?>