<?php

namespace app\helpers;

use ElasticEmailClient;
use Exception;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Yii;

class EmailHelper
{
    public static function contact($model)
    {

        // Create the Transport
        $transport = (new Swift_SmtpTransport('localhost', 25))
            ->setUsername('contact@yelyzavetalazarieva.space')
            ->setPassword('password')
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        if(!$model->subject){
            $model->subject='Message from Site-portfolio';
        }
        // Create a message
        $message = (new Swift_Message($model->subject))
            ->setFrom(['contact@yelyzavetalazarieva.space'])
            ->setTo('contact@yelyzavetalazarieva.space')
            ->setBody("email: " . $model->email . "\nText: " . $model->message . "\n")
        ;

        // Send the message
        $result = $mailer->send($message);
        if ($result>0)
            return true;
        return false;
    }
}
