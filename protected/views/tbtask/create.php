<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */

$this->breadcrumbs=array(
	'Tbtasks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbtask', 'url'=>array('index')),
	array('label'=>'Manage Tbtask', 'url'=>array('admin')),
);
?>

<h1>Create Tbtask</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>