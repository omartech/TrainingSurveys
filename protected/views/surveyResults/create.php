<?php
/* @var $this SurveyResultsController */
/* @var $model SurveyResults */

$this->breadcrumbs=array(
	'Survey Results'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SurveyResults', 'url'=>array('index')),
	array('label'=>'Manage SurveyResults', 'url'=>array('admin')),
);
?>

<h1>Create SurveyResults</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>