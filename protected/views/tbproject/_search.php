<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */
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
		<?php echo $form->label($model,'pr_name'); ?>
		<?php echo $form->textField($model,'pr_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_specification'); ?>
		<?php echo $form->textField($model,'pr_specification',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_date_create'); ?>
		<?php echo $form->textField($model,'pr_date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_status'); ?>
		<?php echo $form->textField($model,'pr_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_user'); ?>
		<?php echo $form->textField($model,'pr_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->