<?php
/* @var $this TbmilestoneController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbmilestones',
);

$this->menu=array(
	array('label'=>'Create Tbmilestone', 'url'=>array('create')),
	array('label'=>'Manage Tbmilestone', 'url'=>array('admin')),
);
?>

<h1>Tbmilestones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
