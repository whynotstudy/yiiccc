<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
/*
 * 嗯
 * */
$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(['id' => 'signup-form']); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'password_repeat')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('注册', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>