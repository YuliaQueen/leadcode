<?php

use common\models\User;
use yii\web\View;

/* @var $this View */
/* @var $model User */

$this->title = 'Создать пользователя';
?>

<?= $this->render('_form', ['model'=> $model]); ?>
