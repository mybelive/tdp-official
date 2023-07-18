<?php

class ContactModel extends BasicModel
{
    public $name = 'contact';

    public function submit()
    {
        $file = APP_DATASET . 'contact.log';
        $data = var_export($_POST, true) . "\r\n";
        if (file_put_contents($file, $data, FILE_APPEND)) {
            App::obtain('ErrorModel')->ouput('OK');
        }
        App::obtain('ErrorModel')->ouput('IO Failed');
    }
}