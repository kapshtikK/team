<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */

$this->breadcrumbs=array(
	'Tbtasks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbtask', 'url'=>array('index')),
	array('label'=>'Create Tbtask', 'url'=>array('create')),
	array('label'=>'View Tbtask', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbtask', 'url'=>array('admin')),
);
?>

<h1>Update Tbtask <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>