<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'Tbprojects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbproject', 'url'=>array('index')),
	array('label'=>'Create Tbproject', 'url'=>array('create')),
	array('label'=>'View Tbproject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tbproject', 'url'=>array('admin')),
);
?>

<h1>Update Tbproject <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>