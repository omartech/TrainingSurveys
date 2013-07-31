<?php
/* @var $this TrainingsController */
/* @var $model Trainings */

$this->breadcrumbs=array(
	'Trainings'=>array('index'),
	$model->TrainingID=>array('view','id'=>$model->TrainingID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trainings', 'url'=>array('index')),
	array('label'=>'Create Trainings', 'url'=>array('create')),
	array('label'=>'View Trainings', 'url'=>array('view', 'id'=>$model->TrainingID)),
	array('label'=>'Manage Trainings', 'url'=>array('admin')),
);
?>

<h1>Update Trainings <?php echo $model->TrainingID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>