<?php
/**
 * @var $model frontend\models\Employee
 */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>

<h1>Изменить данные</h1>

<form method="post">
    <label>
        <p>Имя:</p>
        <input name="firstName" type="text" />
        <br><br>

        <p>Фамилия:</p>
        <input name="lastName" type="text" />
        <br><br>

        <p>Логин:</p>
        <input name="middleName" type="text" />
        <br><br>

        <input type="submit" />
    </label>
</form>