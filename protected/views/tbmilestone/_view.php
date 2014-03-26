<?php
/* @var $this TbmilestoneController */
/* @var $data Tbmilestone */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_name')); ?>:</b>
	<?php echo CHtml::encode($data->m_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_specification')); ?>:</b>
	<?php echo CHtml::encode($data->m_specification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_responsible')); ?>:</b>
	<?php echo CHtml::encode($data->m_responsible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_date_create')); ?>:</b>
	<?php echo CHtml::encode($data->m_date_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_deadline')); ?>:</b>
	<?php echo CHtml::encode($data->m_deadline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_reminder')); ?>:</b>
	<?php echo CHtml::encode($data->m_reminder); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('m_type')); ?>:</b>
	<?php echo CHtml::encode($data->m_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_status')); ?>:</b>
	<?php echo CHtml::encode($data->m_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_author')); ?>:</b>
	<?php echo CHtml::encode($data->m_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_project')); ?>:</b>
	<?php echo CHtml::encode($data->m_project); ?>
	<br />

	*/ ?>

</div>