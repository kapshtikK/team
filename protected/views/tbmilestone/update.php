<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */

$this->breadcrumbs=array(
	'Tbmilestones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbmilestone', 'url'=>array('index')),
	array('label'=>'Create Tbmilestone', 'url'=>array('create')),
	array('label'=>'View Tbmilestone', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbmilestone', 'url'=>array('admin')),
);
?>

<h1>Update Tbmilestone <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>