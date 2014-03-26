<?php
/* @var $this TbuserController */
/* @var $model Tbuser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbuser-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'u_name'); ?>
		<?php echo $form->textField($model,'u_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'u_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_login'); ?>
		<?php echo $form->textField($model,'u_login',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'u_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_password'); ?>
		<?php echo $form->textField($model,'u_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'u_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role_type'); ?>
		<?php echo $form->textField($model,'role_type'); ?>
		<?php echo $form->error($model,'role_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->