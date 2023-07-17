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
    public $agreed;

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required', 'message' => Yii::t('translations', 'Field must be filled')],
            [['name', 'email', 'message'], 'string'],
            ['subject','string'],
            [['agreed'], 'required', 'requiredValue' => 1, 'message' => YII::t('translations', 'You must agree to the Privacy Policy.')],
            ['email', 'email'],
        ];
    }
}



