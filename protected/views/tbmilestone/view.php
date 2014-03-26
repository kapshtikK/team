<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */

$this->breadcrumbs=array(
	'Tbmilestones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tbmilestone', 'url'=>array('index')),
	array('label'=>'Create Tbmilestone', 'url'=>array('create')),
	array('label'=>'Update Tbmilestone', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbmilestone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbmilestone', 'url'=>array('admin')),
);
?>

<h1>View Tbmilestone #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'm_name',
		'm_specification',
		'm_responsible',
		'm_date_create',
		'm_deadline',
		'm_reminder',
		'm_type',
		'm_status',
		'm_author',
		'm_project',
	),
)); ?>
