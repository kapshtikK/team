<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */

$this->breadcrumbs=array(
	'Tbmilestones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tbmilestone', 'url'=>array('index')),
	array('label'=>'Create Tbmilestone', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbmilestone-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbmilestones</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbmilestone-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'm_name',
		'm_specification',
		'm_responsible',
		'm_date_create',
		'm_deadline',
		/*
		'm_reminder',
		'm_type',
		'm_status',
		'm_author',
		'm_project',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
