<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Producer;
use frontend\models\Attorney;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-form">

	<?php $form = ActiveForm::begin(); ?>
<? $producer = ArrayHelper::map(\frontend\models\Producer::find()->all(),'id', 'firstName')?>
    <?= $form->field($model, 'producerID')->dropDownList($producer,['prompt'=>'something']) ?>

    <?= $form->field($model, 'contractDate')->textInput() ?>

    <?= $form->field($model, 'inspectionDate')->textInput() ?>

    <?= $form->field($model, 'closingDate')->textInput() ?>
<? $attorney = ArrayHelper::map(frontend\models\Attorney::find()->all(),'id','firstName') ?>
    <?= $form->field($model, 'closingAttorneyID')->dropDownList($attorney,['prompt'=>'Please select']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
