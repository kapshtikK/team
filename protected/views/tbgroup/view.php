<?php
/* @var $this TbgroupController */
/* @var $model Tbgroup */

$this->breadcrumbs=array(
	'Tbgroups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbgroup', 'url'=>array('index')),
	array('label'=>'Create Tbgroup', 'url'=>array('create')),
	array('label'=>'Update Tbgroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbgroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbgroup', 'url'=>array('admin')),
);
?>

<h1>View Tbgroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'g_admin',
		'g_user',
	),
)); ?>
