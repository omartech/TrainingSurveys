<?php
/* @var $this SurveyResultsController */
/* @var $data SurveyResults */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ResultsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ResultsID), array('view', 'id'=>$data->ResultsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrainingID')); ?>:</b>
	<?php echo CHtml::encode($data->TrainingID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParticipantID')); ?>:</b>
	<?php echo CHtml::encode($data->ParticipantID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Answers')); ?>:</b>
	<?php echo CHtml::encode($data->Answers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TimeOfEntry')); ?>:</b>
	<?php echo CHtml::encode($data->TimeOfEntry); ?>
	<br />


</div>