<?php
    /*$config['email'] = array
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
    );*/
    $config['email'] = array
    (
      'server' => array
      (
        //  KLUDGE: 
        //  https://productforums.google.com/forum/#!topic/gmail/4dVju8mVxds
        //  Disabled items are due to Google's SSL feature, 
        //  which Godaddy doesn't support. Disabling the protocol key seems
        //  to revert to its default, which I don't know what it is.
        //  smtp_pass/dahonglaya is from the Google App credentials.
        //'protocol'  => 'smtp',
        //'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_host' => 'smtpout.secureserver.net',
        'smtp_port' => 465,
        'smtp_user' => 'admin@simplifie.net',
        'smtp_pass' => 'dahonglaya',
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'starttls'  => true,
        'newline'   => "\r\n",
        'crlf' => "\r\n"
      ),
      'admin' => 'admin@simplifie.net'
    );