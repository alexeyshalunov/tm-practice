<?php

if 
    (
        !isset($_SERVER['PHP_AUTH_USER']) ||
        (
            ('tester' != $_SERVER['PHP_AUTH_USER']) ||
            ('123' != $_SERVER['PHP_AUTH_PW'])
        )
    )
{
    header('WWW-Authenticate: Basic relam="Test site"');
    header('HTTP/1.0 401 Unauth');

    die();
    
}
echo '<pre>';
var_export($_SERVER);

