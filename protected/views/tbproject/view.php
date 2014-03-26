<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'Tbprojects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbproject', 'url'=>array('index')),
	array('label'=>'Create Tbproject', 'url'=>array('create')),
	array('label'=>'Update Tbproject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbproject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbproject', 'url'=>array('admin')),
);
?>

<h1>View Tbproject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pr_name',
		'pr_specification',
		'pr_date_create',
		'pr_status',
		'pr_user',
	),
)); ?>
