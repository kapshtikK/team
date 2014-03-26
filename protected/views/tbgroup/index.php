<?php
/* @var $this TbgroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbgroups',
);

$this->menu=array(
	array('label'=>'Create Tbgroup', 'url'=>array('create')),
	array('label'=>'Manage Tbgroup', 'url'=>array('admin')),
);
?>

<h1>Tbgroups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
