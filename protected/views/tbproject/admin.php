<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'Tbprojects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tbproject', 'url'=>array('index')),
	array('label'=>'Create Tbproject', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbproject-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbprojects</h1>

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
	'id'=>'tbproject-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pr_name',
		'pr_specification',
		'pr_date_create',
		'pr_status',
		'pr_user',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
