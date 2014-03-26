<?php
/* @var $this TbteamController */
/* @var $data Tbteam */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_project')); ?>:</b>
	<?php echo CHtml::encode($data->team_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_user')); ?>:</b>
	<?php echo CHtml::encode($data->team_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_role')); ?>:</b>
	<?php echo CHtml::encode($data->team_role); ?>
	<br />


</div>