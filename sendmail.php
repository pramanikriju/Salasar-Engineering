<?php


if (isset($_POST['submit'])) {
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $to = 'info@salasarengineering.com';
    //$to = 'kallol.bizzmanweb@gmail.com';
    $sub = 'Message from website';
    $msg = 'Name: ' . strip_tags($_POST['name']) . '<br />';
    $msg .= 'Email: ' . strip_tags($_POST['email']) . '<br />';
    $msg .= 'Message: ' . strip_tags($_POST['msg']) . '<br />';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= 'From: info@salasarengineering.com';
    
    $success = mail($to, $sub, $msg, $headers);
    
    if (!$success) {
        //echo 'success';
        print_r(error_get_last()['message']);
    } else {
        header('location: http://salasarengineering.com/thankyou.html');
    }
    
} else {
    header('location: http://salasarengineering.com/contact.html');
}