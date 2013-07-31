<?php
/* @var $this SurveyResultsController */
/* @var $model SurveyResults */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'survey-results-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TrainingID'); ?>
		<?php echo $form->textField($model,'TrainingID'); ?>
		<?php echo $form->error($model,'TrainingID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ParticipantID'); ?>
		<?php echo $form->textField($model,'ParticipantID'); ?>
		<?php echo $form->error($model,'ParticipantID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Answers'); ?>
		<?php echo $form->textField($model,'Answers',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Answers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TimeOfEntry'); ?>
		<?php echo $form->textField($model,'TimeOfEntry'); ?>
		<?php echo $form->error($model,'TimeOfEntry'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->