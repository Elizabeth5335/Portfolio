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
}



