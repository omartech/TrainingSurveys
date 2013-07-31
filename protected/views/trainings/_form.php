<?php
/* @var $this TrainingsController */
/* @var $model Trainings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trainings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TrainingName'); ?>
		<?php echo $form->textField($model,'TrainingName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TrainingName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Duration'); ?>
		<?php echo $form->textField($model,'Duration',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'Duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Location'); ?>
		<?php echo $form->textField($model,'Location',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trainer'); ?>
		<?php echo $form->textField($model,'Trainer',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Trainer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Participants'); ?>
		<?php echo $form->textField($model,'Participants'); ?>
		<?php echo $form->error($model,'Participants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Surveys'); ?>
		<?php echo $form->textField($model,'Surveys',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Surveys'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'Remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Admin'); ?>
		<?php echo $form->textField($model,'Admin',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Admin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->