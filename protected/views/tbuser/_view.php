<?php
/* @var $this TbuserController */
/* @var $data Tbuser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_name')); ?>:</b>
	<?php echo CHtml::encode($data->u_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_login')); ?>:</b>
	<?php echo CHtml::encode($data->u_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_password')); ?>:</b>
	<?php echo CHtml::encode($data->u_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_type')); ?>:</b>
	<?php echo CHtml::encode($data->role_type); ?>
	<br />


</div>