<?php
/* @var $this TbuserController */
/* @var $model Tbuser */

$this->breadcrumbs=array(
	'Tbusers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbuser', 'url'=>array('index')),
	array('label'=>'Create Tbuser', 'url'=>array('create')),
	array('label'=>'View Tbuser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbuser', 'url'=>array('admin')),
);
?>

<h1>Update Tbuser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>