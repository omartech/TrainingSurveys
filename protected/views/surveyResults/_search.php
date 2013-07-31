<?php
/* @var $this SurveyResultsController */
/* @var $model SurveyResults */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ResultsID'); ?>
		<?php echo $form->textField($model,'ResultsID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrainingID'); ?>
		<?php echo $form->textField($model,'TrainingID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ParticipantID'); ?>
		<?php echo $form->textField($model,'ParticipantID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Answers'); ?>
		<?php echo $form->textField($model,'Answers',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TimeOfEntry'); ?>
		<?php echo $form->textField($model,'TimeOfEntry'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->