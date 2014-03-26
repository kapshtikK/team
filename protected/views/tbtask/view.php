<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */

$this->breadcrumbs=array(
	'Tbtasks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbtask', 'url'=>array('index')),
	array('label'=>'Create Tbtask', 'url'=>array('create')),
	array('label'=>'Update Tbtask', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbtask', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbtask', 'url'=>array('admin')),
);
?>

<h1>View Tbtask #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		't_name',
		't_specification',
		't_project',
		't_milestone',
		't_responsible',
		't_start_date',
		't_deadline',
		't_type',
		't_status',
		't_date_create',
		't_author',
	),
)); ?>
