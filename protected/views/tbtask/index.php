<?php
/* @var $this TbtaskController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbtasks',
);

$this->menu=array(
	array('label'=>'Create Tbtask', 'url'=>array('create')),
	array('label'=>'Manage Tbtask', 'url'=>array('admin')),
);
?>

<h1>Tbtasks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
