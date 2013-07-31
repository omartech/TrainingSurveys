<?php
/* @var $this QuestionsController */
/* @var $model Questions */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->QuestionID=>array('view','id'=>$model->QuestionID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('index')),
	array('label'=>'Create Questions', 'url'=>array('create')),
	array('label'=>'View Questions', 'url'=>array('view', 'id'=>$model->QuestionID)),
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);
?>

<h1>Update Questions <?php echo $model->QuestionID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>