<?php
/* @var $this TbtaskController */
/* @var $data Tbtask */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_name')); ?>:</b>
	<?php echo CHtml::encode($data->t_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_specification')); ?>:</b>
	<?php echo CHtml::encode($data->t_specification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_project')); ?>:</b>
	<?php echo CHtml::encode($data->t_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_milestone')); ?>:</b>
	<?php echo CHtml::encode($data->t_milestone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_responsible')); ?>:</b>
	<?php echo CHtml::encode($data->t_responsible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_start_date')); ?>:</b>
	<?php echo CHtml::encode($data->t_start_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('t_deadline')); ?>:</b>
	<?php echo CHtml::encode($data->t_deadline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_type')); ?>:</b>
	<?php echo CHtml::encode($data->t_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_status')); ?>:</b>
	<?php echo CHtml::encode($data->t_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_date_create')); ?>:</b>
	<?php echo CHtml::encode($data->t_date_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_author')); ?>:</b>
	<?php echo CHtml::encode($data->t_author); ?>
	<br />

	*/ ?>

</div>