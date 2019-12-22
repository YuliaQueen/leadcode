<?php

use common\models\User;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model User */
?>

<?php $form = \yii\widgets\ActiveForm::begin() ?>

<?= $form->field($model, 'username')->textInput()?>
<?= $form->field($model, 'email')->textInput(['type' => 'email'])?>
<?= $form->field($model, 'status')->dropDownList([
    User::STATUS_ACTIVE => 'Активный',
    User::STATUS_INACTIVE => 'Неактивный',
    User::STATUS_DELETED => 'Удаленный',
])?>

<?= $form->field($model, 'password')->passwordInput([])?>

<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>

<?php \yii\widgets\ActiveForm::end() ?>


