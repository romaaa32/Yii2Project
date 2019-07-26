<?php


namespace frontend\models;


use Yii;
use yii\base\Model;

class Subscribe extends Model
{

    public $email;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email']
        ];
    }

    public function save()
    {
        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}