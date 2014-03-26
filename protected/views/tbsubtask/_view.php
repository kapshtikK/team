<?php
/* @var $this TbsubtaskController */
/* @var $data Tbsubtask */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_specification')); ?>:</b>
	<?php echo CHtml::encode($data->st_specification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_task')); ?>:</b>
	<?php echo CHtml::encode($data->st_task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_responsible')); ?>:</b>
	<?php echo CHtml::encode($data->st_responsible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_date_create')); ?>:</b>
	<?php echo CHtml::encode($data->st_date_create); ?>
	<br />


</div>