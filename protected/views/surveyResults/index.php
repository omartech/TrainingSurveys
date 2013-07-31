<?php
/* @var $this SurveyResultsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Survey Results',
);

$this->menu=array(
	array('label'=>'Create SurveyResults', 'url'=>array('create')),
	array('label'=>'Manage SurveyResults', 'url'=>array('admin')),
);
?>

<h1>Survey Results</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
