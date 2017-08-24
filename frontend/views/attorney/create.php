<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Attorney */

$this->title = 'Create Attorney';
$this->params['breadcrumbs'][] = ['label' => 'Attorneys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attorney-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
