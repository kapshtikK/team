<?php
/* @var $this TbtaskController */
/* @var $model Tbtask */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbtask-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'t_name'); ?>
		<?php echo $form->textField($model,'t_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_specification'); ?>
		<?php echo $form->textField($model,'t_specification',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'t_specification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_project'); ?>
		<?php echo $form->textField($model,'t_project'); ?>
		<?php echo $form->error($model,'t_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_milestone'); ?>
		<?php echo $form->textField($model,'t_milestone'); ?>
		<?php echo $form->error($model,'t_milestone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_responsible'); ?>
		<?php echo $form->textField($model,'t_responsible'); ?>
		<?php echo $form->error($model,'t_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_start_date'); ?>
		<?php echo $form->textField($model,'t_start_date'); ?>
		<?php echo $form->error($model,'t_start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_deadline'); ?>
		<?php echo $form->textField($model,'t_deadline'); ?>
		<?php echo $form->error($model,'t_deadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_type'); ?>
		<?php echo $form->textField($model,'t_type'); ?>
		<?php echo $form->error($model,'t_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_status'); ?>
		<?php echo $form->textField($model,'t_status'); ?>
		<?php echo $form->error($model,'t_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_date_create'); ?>
		<?php echo $form->textField($model,'t_date_create'); ?>
		<?php echo $form->error($model,'t_date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_author'); ?>
		<?php echo $form->textField($model,'t_author'); ?>
		<?php echo $form->error($model,'t_author'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->