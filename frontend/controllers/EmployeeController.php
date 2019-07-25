<?php


namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;
use frontend\models\example\Animal;
use frontend\models\example\Human;

/**
 * Class EmployeeController
 * @package frontend\controllers
 */
class EmployeeController extends Controller
{

    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = 1000;

        echo $employee1->attributes;
        echo '<hr>';

        foreach ($employee1 as $a => $b) {
            echo "$a: $b<br>";
        }
    }

    public function actionTest()
    {
        $human1 = new Human();
        $animal1 = new Animal();

        $human1->walk();
        $animal1->walk();
    }
}