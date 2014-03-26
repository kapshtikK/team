<?php
/* @var $this TbteamController */
/* @var $model Tbteam */

$this->breadcrumbs=array(
	'Tbteams'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbteam', 'url'=>array('index')),
	array('label'=>'Create Tbteam', 'url'=>array('create')),
	array('label'=>'Update Tbteam', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbteam', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbteam', 'url'=>array('admin')),
);
?>

<h1>View Tbteam #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'team_project',
		'team_user',
		'team_role',
	),
)); ?>
