<?php

namespace app\models\auth;

use yii\mongodb\Query;
use yii\mongodb\ActiveRecord;
use yii\data\ActiveDataProvider;

class BaseAuth extends ActiveRecord
{
    public $username;
    public $password;

    public static function collectionName()
    {
        return 'user';
    }

    public function attributes()
    {
        return [
            '_id',
            'name',
            'password'
        ];
    }

    public function oneInfo()
    {
        $query = new Query ();
        $row = $query->select(['name'])
            ->from (BaseAuth::collectionName())
            ->where(['name' => $this->username], ['password' => $this->password])
            ->one ();
        return $row;
    }
}