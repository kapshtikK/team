<?php
/* @var $this TbsubtaskController */
/* @var $model Tbsubtask */
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
		<?php echo $form->label($model,'st_specification'); ?>
		<?php echo $form->textField($model,'st_specification',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_task'); ?>
		<?php echo $form->textField($model,'st_task'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_responsible'); ?>
		<?php echo $form->textField($model,'st_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_date_create'); ?>
		<?php echo $form->textField($model,'st_date_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->