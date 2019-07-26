<?php


namespace frontend\models;

use yii\base\Model;

/**
 * Class Employee
 * @package frontend\models
 */
class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;

    /**
     * @return array
     */
    public function scenarios()
    {
        return [
          self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email'],
          self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE], // Указываем к конкретному сценарию обязательное поле
        ];
    }

    public function save()
    {
        return true;
    }
}