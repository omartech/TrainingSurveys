<?php
/* @var $this TrainingsController */
/* @var $model Trainings */

$this->breadcrumbs=array(
	'Trainings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trainings', 'url'=>array('index')),
	array('label'=>'Manage Trainings', 'url'=>array('admin')),
);
?>

<h1>Create Trainings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>