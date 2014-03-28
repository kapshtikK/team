<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */

$this->breadcrumbs=array(
	'Задача'=>array('index'),
	'Создать',
);

?>

<h1>Создать задачу</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>