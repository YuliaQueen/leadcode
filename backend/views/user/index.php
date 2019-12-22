<?php

/* @var $this View */
/* @var $searchModel UserSearch */
/* @var $dataProvider ActiveDataProvider */


use backend\models\UserSearch;
use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\helpers\Html;

$this->title = 'Список пользователей';
?>

<?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>

<?=  yii\grid\GridView::widget([
    'filterModel' => $searchModel,
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'username',
        'email',
        'status',

        [
            'class' => 'andrewdanilov\gridtools\FontawesomeActionColumn',
            'template' => '{update} {delete}',
        ]
    ]
])?>
