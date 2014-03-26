<?php
/* @var $this TbteamController */
/* @var $model Tbteam */

$this->breadcrumbs=array(
	'Tbteams'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbteam', 'url'=>array('index')),
	array('label'=>'Create Tbteam', 'url'=>array('create')),
	array('label'=>'View Tbteam', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbteam', 'url'=>array('admin')),
);
?>

<h1>Update Tbteam <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>