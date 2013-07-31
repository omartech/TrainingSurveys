<?php
/* @var $this TrainingsController */
/* @var $data Trainings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrainingID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TrainingID), array('view', 'id'=>$data->TrainingID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrainingName')); ?>:</b>
	<?php echo CHtml::encode($data->TrainingName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::encode($data->Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Duration')); ?>:</b>
	<?php echo CHtml::encode($data->Duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Location')); ?>:</b>
	<?php echo CHtml::encode($data->Location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trainer')); ?>:</b>
	<?php echo CHtml::encode($data->Trainer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Category')); ?>:</b>
	<?php echo CHtml::encode($data->Category); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Participants')); ?>:</b>
	<?php echo CHtml::encode($data->Participants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Surveys')); ?>:</b>
	<?php echo CHtml::encode($data->Surveys); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Remarks')); ?>:</b>
	<?php echo CHtml::encode($data->Remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Admin')); ?>:</b>
	<?php echo CHtml::encode($data->Admin); ?>
	<br />

	*/ ?>

</div>