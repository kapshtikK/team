<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */

$this->breadcrumbs=array(
	'Веха'=>array('index'),
	'Создать',
);


?>

<h1>Создать веху</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>