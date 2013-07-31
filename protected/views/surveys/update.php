<?php
/* @var $this SurveysController */
/* @var $model Surveys */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	$model->SurveyID=>array('view','id'=>$model->SurveyID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Surveys', 'url'=>array('index')),
	array('label'=>'Create Surveys', 'url'=>array('create')),
	array('label'=>'View Surveys', 'url'=>array('view', 'id'=>$model->SurveyID)),
	array('label'=>'Manage Surveys', 'url'=>array('admin')),
);
?>

<h1>Update Surveys <?php echo $model->SurveyID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>