<?php

namespace app\helpers;

use ElasticEmailClient;
use Exception;
use Yii;

class ElasticEmailHelper
{
    public static function contact($model)
    {
        $loader = require_once(__DIR__ . '/../vendor/autoload.php');

        $url = 'https://api.elasticemail.com/v2/email/send';
        if(!$model->subject){
            $model->subject='Message from Site-portfolio';
        }
        try {
            $post = array(
                'from' => 'elizabeth5335west@gmail.com',
                'fromName' => $model->name,
                'apikey' => '57AC02738AEAD5343F748872E761DF284B4773985514DD7C51699067E8AB068031FCA8EC63461F35E7A8A01E85319602',
                'subject' => $model->subject,
                'to' => 'elizabeth5335west@gmail.com',
                'bodyText' => "email: " . $model->email . "\nText: " . $model->message . "\n",
            );

            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $post,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_SSL_VERIFYPEER => false
            ));

            $result = curl_exec($ch);
            curl_close($ch);

        } catch (Exception $ex) {
            //echo $ex->getMessage();
        }
    }
}
