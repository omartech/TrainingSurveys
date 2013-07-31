<?php
/* @var $this SurveysController */
/* @var $model Surveys */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surveys-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SurveyName'); ?>
		<?php echo $form->textField($model,'SurveyName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SurveyName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Questions'); ?>
		<?php echo $form->textField($model,'Questions',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Questions'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->