<?php
/* @var $this TbtimerController */
/* @var $model Tbtimer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timer_task'); ?>
		<?php echo $form->textField($model,'timer_task'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timer_responsible'); ?>
		<?php echo $form->textField($model,'timer_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timer_project'); ?>
		<?php echo $form->textField($model,'timer_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'work_time'); ?>
		<?php echo $form->textField($model,'work_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->