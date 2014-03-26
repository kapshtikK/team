<?php
/* @var $this TbteamController */
/* @var $model Tbteam */
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
		<?php echo $form->label($model,'team_project'); ?>
		<?php echo $form->textField($model,'team_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_user'); ?>
		<?php echo $form->textField($model,'team_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_role'); ?>
		<?php echo $form->textField($model,'team_role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->