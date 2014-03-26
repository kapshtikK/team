<?php
/* @var $this TbsubtaskController */
/* @var $model Tbsubtask */

$this->breadcrumbs=array(
	'Tbsubtasks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbsubtask', 'url'=>array('index')),
	array('label'=>'Manage Tbsubtask', 'url'=>array('admin')),
);
?>

<h1>Create Tbsubtask</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>