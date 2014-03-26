<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'Tbprojects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbproject', 'url'=>array('index')),
	array('label'=>'Manage Tbproject', 'url'=>array('admin')),
);
?>

<h1>Create Tbproject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>