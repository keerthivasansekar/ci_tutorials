<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'protocol' => 'sendmail', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.gmail.com', 
    'smtp_port' => '465',
    'smtp_user' => 's.keerthivasan7@gmail.com',
    'smtp_pass' => 'VasaN8626.',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);
