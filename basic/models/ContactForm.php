<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            [['name', 'email', 'message'], 'string'],
            ['subject','string'],
            ['email', 'email'],
        ];
    }


    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->message)
                ->send();
            return true;
        }
        return false;
    }
}



