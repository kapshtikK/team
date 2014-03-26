<?php
/* @var $this TbtimerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbtimers',
);

$this->menu=array(
	array('label'=>'Create Tbtimer', 'url'=>array('create')),
	array('label'=>'Manage Tbtimer', 'url'=>array('admin')),
);
?>

<h1>Tbtimers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
