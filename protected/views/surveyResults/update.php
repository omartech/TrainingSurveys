<?php
/* @var $this SurveyResultsController */
/* @var $model SurveyResults */

$this->breadcrumbs=array(
	'Survey Results'=>array('index'),
	$model->ResultsID=>array('view','id'=>$model->ResultsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List SurveyResults', 'url'=>array('index')),
	array('label'=>'Create SurveyResults', 'url'=>array('create')),
	array('label'=>'View SurveyResults', 'url'=>array('view', 'id'=>$model->ResultsID)),
	array('label'=>'Manage SurveyResults', 'url'=>array('admin')),
);
?>

<h1>Update SurveyResults <?php echo $model->ResultsID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>