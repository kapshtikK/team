<?php
/* @var $this TbsubtaskController */
/* @var $model Tbsubtask */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbsubtask-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'st_specification'); ?>
		<?php echo $form->textField($model,'st_specification',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'st_specification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_task'); ?>
		<?php echo $form->textField($model,'st_task'); ?>
		<?php echo $form->error($model,'st_task'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_responsible'); ?>
		<?php echo $form->textField($model,'st_responsible'); ?>
		<?php echo $form->error($model,'st_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_date_create'); ?>
		<?php echo $form->textField($model,'st_date_create'); ?>
		<?php echo $form->error($model,'st_date_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->