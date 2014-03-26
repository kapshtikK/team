<?php
/* @var $this TbsubtaskController */
/* @var $model Tbsubtask */

$this->breadcrumbs=array(
	'Tbsubtasks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbsubtask', 'url'=>array('index')),
	array('label'=>'Create Tbsubtask', 'url'=>array('create')),
	array('label'=>'Update Tbsubtask', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbsubtask', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbsubtask', 'url'=>array('admin')),
);
?>

<h1>View Tbsubtask #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'st_specification',
		'st_task',
		'st_responsible',
		'st_date_create',
	),
)); ?>
