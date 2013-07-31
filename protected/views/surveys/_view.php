<?php
/* @var $this SurveysController */
/* @var $data Surveys */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SurveyID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SurveyID), array('view', 'id'=>$data->SurveyID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SurveyName')); ?>:</b>
	<?php echo CHtml::encode($data->SurveyName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Questions')); ?>:</b>
	<?php echo CHtml::encode($data->Questions); ?>
	<br />


</div>