<?php
/* @var $this QuestionsController */
/* @var $model Questions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'QuestionID'); ?>
		<?php echo $form->textField($model,'QuestionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QuestionName'); ?>
		<?php echo $form->textField($model,'QuestionName',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->