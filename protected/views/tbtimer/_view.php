<?php
/* @var $this TbtimerController */
/* @var $data Tbtimer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timer_task')); ?>:</b>
	<?php echo CHtml::encode($data->timer_task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timer_responsible')); ?>:</b>
	<?php echo CHtml::encode($data->timer_responsible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timer_project')); ?>:</b>
	<?php echo CHtml::encode($data->timer_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_time')); ?>:</b>
	<?php echo CHtml::encode($data->work_time); ?>
	<br />


</div>