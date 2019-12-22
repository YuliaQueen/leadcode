<?php

use common\models\User;
use yii\web\View;

/* @var $this View */
/* @var $model User */

$this->title = 'Редактировать пользователя ' . $model->username;
?>

<?= $this->render('_form', ['model'=> $model]); ?>
