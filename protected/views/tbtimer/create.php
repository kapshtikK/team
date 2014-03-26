<?php
/* @var $this TbtimerController */
/* @var $model Tbtimer */

$this->breadcrumbs=array(
	'Tbtimers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbtimer', 'url'=>array('index')),
	array('label'=>'Manage Tbtimer', 'url'=>array('admin')),
);
?>

<h1>Create Tbtimer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>