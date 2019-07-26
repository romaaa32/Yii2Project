<?php


namespace frontend\controllers;

use frontend\models\Employee;
use Yii;
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

    /**
     * @return string
     */
    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formDate = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formDate;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Регистрация прошла успешно!');
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formDate = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formDate;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Данные успешно изменены!');
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}