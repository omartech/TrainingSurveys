<?php
/* @var $this TrainingsController */
/* @var $model Trainings */

$this->breadcrumbs=array(
	'Trainings'=>array('index'),
	$model->TrainingID,
);

$this->menu=array(
	array('label'=>'List Trainings', 'url'=>array('index')),
	array('label'=>'Create Trainings', 'url'=>array('create')),
	array('label'=>'Update Trainings', 'url'=>array('update', 'id'=>$model->TrainingID)),
	array('label'=>'Delete Trainings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TrainingID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trainings', 'url'=>array('admin')),
);
?>

<h1>View Trainings #<?php echo $model->TrainingID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TrainingID',
		'TrainingName',
		'Date',
		'Duration',
		'Location',
		'Trainer',
		'Category',
		'Participants',
		'Surveys',
		'Status',
		'Remarks',
		'Admin',
	),
)); ?>
