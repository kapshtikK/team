<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbproject-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_name'); ?>
		<?php echo $form->textField($model,'pr_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pr_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_specification'); ?>
		<?php echo $form->textField($model,'pr_specification',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'pr_specification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_date_create'); ?>
		<?php echo $form->textField($model,'pr_date_create'); ?>
		<?php echo $form->error($model,'pr_date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_status'); ?>
		<?php echo $form->textField($model,'pr_status'); ?>
		<?php echo $form->error($model,'pr_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_user'); ?>
		<?php echo $form->textField($model,'pr_user'); ?>
		<?php echo $form->error($model,'pr_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->