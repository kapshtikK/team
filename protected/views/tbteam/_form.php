<?php
/* @var $this TbteamController */
/* @var $model Tbteam */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbteam-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team_project'); ?>
		<?php echo $form->textField($model,'team_project'); ?>
		<?php echo $form->error($model,'team_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_user'); ?>
		<?php echo $form->textField($model,'team_user'); ?>
		<?php echo $form->error($model,'team_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_role'); ?>
		<?php echo $form->textField($model,'team_role'); ?>
		<?php echo $form->error($model,'team_role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->