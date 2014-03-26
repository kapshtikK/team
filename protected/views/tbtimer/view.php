<?php
/* @var $this TbtimerController */
/* @var $model Tbtimer */

$this->breadcrumbs=array(
	'Tbtimers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbtimer', 'url'=>array('index')),
	array('label'=>'Create Tbtimer', 'url'=>array('create')),
	array('label'=>'Update Tbtimer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbtimer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbtimer', 'url'=>array('admin')),
);
?>

<h1>View Tbtimer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'timer_task',
		'timer_responsible',
		'timer_project',
		'work_time',
	),
)); ?>
