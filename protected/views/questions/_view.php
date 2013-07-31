<?php
/* @var $this QuestionsController */
/* @var $data Questions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuestionID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->QuestionID), array('view', 'id'=>$data->QuestionID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuestionName')); ?>:</b>
	<?php echo CHtml::encode($data->QuestionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->Type); ?>
	<br />


</div>