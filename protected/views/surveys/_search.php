<?php
/* @var $this SurveysController */
/* @var $model Surveys */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SurveyID'); ?>
		<?php echo $form->textField($model,'SurveyID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SurveyName'); ?>
		<?php echo $form->textField($model,'SurveyName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Questions'); ?>
		<?php echo $form->textField($model,'Questions',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->