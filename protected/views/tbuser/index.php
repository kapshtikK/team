<?php
/* @var $this TbuserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbusers',
);

$this->menu=array(
	array('label'=>'Create Tbuser', 'url'=>array('create')),
	array('label'=>'Manage Tbuser', 'url'=>array('admin')),
);
?>

<h1>Tbusers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
