<?php
/* @var $this TbuserController */
/* @var $model Tbuser */

$this->breadcrumbs=array(
	'Tbusers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbuser', 'url'=>array('index')),
	array('label'=>'Create Tbuser', 'url'=>array('create')),
	array('label'=>'Update Tbuser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbuser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbuser', 'url'=>array('admin')),
);
?>

<h1>View Tbuser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'u_name',
		'u_login',
		'u_password',
		'role_type',
	),
)); ?>
