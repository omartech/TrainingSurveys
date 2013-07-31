<?php
/* @var $this TrainingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trainings',
);

$this->menu=array(
	array('label'=>'Create Trainings', 'url'=>array('create')),
	array('label'=>'Manage Trainings', 'url'=>array('admin')),
);
?>

<h1>Trainings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
