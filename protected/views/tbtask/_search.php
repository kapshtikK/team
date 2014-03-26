<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */
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
		<?php echo $form->label($model,'t_name'); ?>
		<?php echo $form->textField($model,'t_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_specification'); ?>
		<?php echo $form->textField($model,'t_specification',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_project'); ?>
		<?php echo $form->textField($model,'t_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_milestone'); ?>
		<?php echo $form->textField($model,'t_milestone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_responsible'); ?>
		<?php echo $form->textField($model,'t_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_start_date'); ?>
		<?php echo $form->textField($model,'t_start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_deadline'); ?>
		<?php echo $form->textField($model,'t_deadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_type'); ?>
		<?php echo $form->textField($model,'t_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_status'); ?>
		<?php echo $form->textField($model,'t_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_date_create'); ?>
		<?php echo $form->textField($model,'t_date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_author'); ?>
		<?php echo $form->textField($model,'t_author'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->