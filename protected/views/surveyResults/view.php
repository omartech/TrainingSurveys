<?php
/* @var $this SurveyResultsController */
/* @var $model SurveyResults */

$this->breadcrumbs=array(
	'Survey Results'=>array('index'),
	$model->ResultsID,
);

$this->menu=array(
	array('label'=>'List SurveyResults', 'url'=>array('index')),
	array('label'=>'Create SurveyResults', 'url'=>array('create')),
	array('label'=>'Update SurveyResults', 'url'=>array('update', 'id'=>$model->ResultsID)),
	array('label'=>'Delete SurveyResults', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ResultsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SurveyResults', 'url'=>array('admin')),
);
?>

<h1>View SurveyResults #<?php echo $model->ResultsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ResultsID',
		'TrainingID',
		'ParticipantID',
		'Answers',
		'TimeOfEntry',
	),
)); ?>
