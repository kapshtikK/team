<?php
/* @var $this TbgroupController */
/* @var $data Tbgroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('g_admin')); ?>:</b>
	<?php echo CHtml::encode($data->g_admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('g_user')); ?>:</b>
	<?php echo CHtml::encode($data->g_user); ?>
	<br />


</div>