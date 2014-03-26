<?php
/* @var $this TbsubtaskController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbsubtasks',
);

$this->menu=array(
	array('label'=>'Create Tbsubtask', 'url'=>array('create')),
	array('label'=>'Manage Tbsubtask', 'url'=>array('admin')),
);
?>

<h1>Tbsubtasks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
