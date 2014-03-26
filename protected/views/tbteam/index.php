<?php
/* @var $this TbteamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbteams',
);

$this->menu=array(
	array('label'=>'Create Tbteam', 'url'=>array('create')),
	array('label'=>'Manage Tbteam', 'url'=>array('admin')),
);
?>

<h1>Tbteams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
