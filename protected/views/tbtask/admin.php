<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */

$this->breadcrumbs=array(
	'Tbtasks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tbtask', 'url'=>array('index')),
	array('label'=>'Create Tbtask', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbtask-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbtasks</h1>

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
	'id'=>'tbtask-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		't_name',
		't_specification',
		't_project',
		't_milestone',
		't_responsible',
		/*
		't_start_date',
		't_deadline',
		't_type',
		't_status',
		't_date_create',
		't_author',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
