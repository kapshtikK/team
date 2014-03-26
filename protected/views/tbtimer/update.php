<?php
/* @var $this TbtimerController */
/* @var $model Tbtimer */

$this->breadcrumbs=array(
	'Tbtimers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbtimer', 'url'=>array('index')),
	array('label'=>'Create Tbtimer', 'url'=>array('create')),
	array('label'=>'View Tbtimer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbtimer', 'url'=>array('admin')),
);
?>

<h1>Update Tbtimer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>