<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchGallery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('backend', 'Galleries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(\Yii::t('backend', 'Create gallery'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'slug',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'images' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-picture"></span>', ['update']);
                        },
                ],
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>
</div>