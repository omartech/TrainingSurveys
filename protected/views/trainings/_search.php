<?php
/* @var $this TrainingsController */
/* @var $model Trainings */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TrainingID'); ?>
		<?php echo $form->textField($model,'TrainingID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrainingName'); ?>
		<?php echo $form->textField($model,'TrainingName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Duration'); ?>
		<?php echo $form->textField($model,'Duration',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Location'); ?>
		<?php echo $form->textField($model,'Location',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trainer'); ?>
		<?php echo $form->textField($model,'Trainer',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Participants'); ?>
		<?php echo $form->textField($model,'Participants'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Surveys'); ?>
		<?php echo $form->textField($model,'Surveys',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Admin'); ?>
		<?php echo $form->textField($model,'Admin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->