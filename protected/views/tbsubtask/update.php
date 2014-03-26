<?php
/* @var $this TbsubtaskController */
/* @var $model Tbsubtask */

$this->breadcrumbs=array(
	'Tbsubtasks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbsubtask', 'url'=>array('index')),
	array('label'=>'Create Tbsubtask', 'url'=>array('create')),
	array('label'=>'View Tbsubtask', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbsubtask', 'url'=>array('admin')),
);
?>

<h1>Update Tbsubtask <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>