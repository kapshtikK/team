<?php
/* @var $this TbteamController */
/* @var $model Tbteam */

$this->breadcrumbs=array(
	'Tbteams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbteam', 'url'=>array('index')),
	array('label'=>'Manage Tbteam', 'url'=>array('admin')),
);
?>

<h1>Create Tbteam</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>