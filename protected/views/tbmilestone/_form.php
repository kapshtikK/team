<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbmilestone-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'m_name'); ?>
		<?php echo $form->textField($model,'m_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'m_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_specification'); ?>
		<?php echo $form->textField($model,'m_specification',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'m_specification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_responsible'); ?>
		<?php echo $form->textField($model,'m_responsible'); ?>
		<?php echo $form->error($model,'m_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_date_create'); ?>
		<?php echo $form->textField($model,'m_date_create'); ?>
		<?php echo $form->error($model,'m_date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_deadline'); ?>
		<?php echo $form->textField($model,'m_deadline'); ?>
		<?php echo $form->error($model,'m_deadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_reminder'); ?>
		<?php echo $form->textField($model,'m_reminder'); ?>
		<?php echo $form->error($model,'m_reminder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_type'); ?>
		<?php echo $form->textField($model,'m_type'); ?>
		<?php echo $form->error($model,'m_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_status'); ?>
		<?php echo $form->textField($model,'m_status'); ?>
		<?php echo $form->error($model,'m_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_author'); ?>
		<?php echo $form->textField($model,'m_author'); ?>
		<?php echo $form->error($model,'m_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_project'); ?>
		<?php echo $form->textField($model,'m_project'); ?>
		<?php echo $form->error($model,'m_project'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->