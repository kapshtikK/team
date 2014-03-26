<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */

$this->breadcrumbs=array(
	'Tbmilestones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbmilestone', 'url'=>array('index')),
	array('label'=>'Manage Tbmilestone', 'url'=>array('admin')),
);
?>

<h1>Create Tbmilestone</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>