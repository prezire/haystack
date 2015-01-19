<?php
    $config['email'] = array
    (
      'server' => array
      (
        //'protocol' => 'sendmail',
        'smtp_host' => 'localhost',
        'smtp_port' => 25,
        'smtp_user' => 'haystackadmin@localhost',
        'smtp_pass' => 'haystack',
        'mailtype' => 'html'
      ),
      'admin' => 'haystackadmin@localhost'
    );
    /*$config['email'] = array
    (
      'server' => array
      (
        'protocol'  => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'admin@simplifie.net',
        'smtp_pass' => 'dahonglaya',
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'starttls'  => true,
        'newline'   => "\r\n"
      ),
      'admin' => 'admin@simplifie.net'
    );*/