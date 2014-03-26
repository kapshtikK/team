<?php
/* @var $this TbgroupController */
/* @var $model Tbgroup */

$this->breadcrumbs=array(
	'Tbgroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbgroup', 'url'=>array('index')),
	array('label'=>'Manage Tbgroup', 'url'=>array('admin')),
);
?>

<h1>Create Tbgroup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>