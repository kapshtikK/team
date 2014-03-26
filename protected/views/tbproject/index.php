<?php
/* @var $this TbprojectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbprojects',
);

$this->menu=array(
	array('label'=>'Create Tbproject', 'url'=>array('create')),
	array('label'=>'Manage Tbproject', 'url'=>array('admin')),
);
?>

<h1>Tbprojects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
