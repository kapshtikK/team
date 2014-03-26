<?php
/* @var $this TbuserController */
/* @var $model Tbuser */

$this->breadcrumbs=array(
	'Tbusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbuser', 'url'=>array('index')),
	array('label'=>'Manage Tbuser', 'url'=>array('admin')),
);
?>

<h1>Create Tbuser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>