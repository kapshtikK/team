<?php
/* @var $this TbprojectController */
/* @var $data Tbproject */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_name')); ?>:</b>
	<?php echo CHtml::encode($data->pr_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_specification')); ?>:</b>
	<?php echo CHtml::encode($data->pr_specification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_date_create')); ?>:</b>
	<?php echo CHtml::encode($data->pr_date_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_status')); ?>:</b>
	<?php echo CHtml::encode($data->pr_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_user')); ?>:</b>
	<?php echo CHtml::encode($data->pr_user); ?>
	<br />


</div>