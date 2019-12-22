<?php

use common\models\User;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model User */
?>

<?php $form = \yii\widgets\ActiveForm::begin() ?>

<?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'email')->textInput(['type' => 'email']) ?>
<?= $form->field($model, 'status')->dropDownList(User::statuses()) ?>

<?= $form->field($model, 'password')->passwordInput([]) ?>

<?= $form->field($model, 'is_admin')->checkbox() ?>

<?= Html::submitButton('Сохранить', [
    'class' => 'btn btn-success',
]) ?>

<?= Html::a('Отмена', ['index'], ['class' => 'btn btn-primary']) ?>

<?php \yii\widgets\ActiveForm::end() ?>


