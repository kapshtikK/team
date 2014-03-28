<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'Проект'=>array('index'),
	'Создать',
);


?>

<h1>Создать проект</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>