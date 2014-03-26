<?php
/* @var $this TbtimerController */
/* @var $model Tbtimer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbtimer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'timer_task'); ?>
		<?php echo $form->textField($model,'timer_task'); ?>
		<?php echo $form->error($model,'timer_task'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timer_responsible'); ?>
		<?php echo $form->textField($model,'timer_responsible'); ?>
		<?php echo $form->error($model,'timer_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timer_project'); ?>
		<?php echo $form->textField($model,'timer_project'); ?>
		<?php echo $form->error($model,'timer_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_time'); ?>
		<?php echo $form->textField($model,'work_time'); ?>
		<?php echo $form->error($model,'work_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->