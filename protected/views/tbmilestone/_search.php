<?php
/* @var $this TbmilestoneController */
/* @var $model Tbmilestone */
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
		<?php echo $form->label($model,'m_name'); ?>
		<?php echo $form->textField($model,'m_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_specification'); ?>
		<?php echo $form->textField($model,'m_specification',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_responsible'); ?>
		<?php echo $form->textField($model,'m_responsible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_date_create'); ?>
		<?php echo $form->textField($model,'m_date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_deadline'); ?>
		<?php echo $form->textField($model,'m_deadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_reminder'); ?>
		<?php echo $form->textField($model,'m_reminder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_type'); ?>
		<?php echo $form->textField($model,'m_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_status'); ?>
		<?php echo $form->textField($model,'m_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_author'); ?>
		<?php echo $form->textField($model,'m_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_project'); ?>
		<?php echo $form->textField($model,'m_project'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->