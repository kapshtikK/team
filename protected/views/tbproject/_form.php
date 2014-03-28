<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbproject-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Название'); ?>
		<?php echo $form->textField($model,'pr_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pr_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Описание'); ?>
		<?php echo $form->textArea($model,'pr_specification',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'pr_specification'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'Менеджер'); ?>
                <?php
                    $connection=Yii::app()->db;
                    $sql="SELECT g_user FROM tb_group where g_admin=".Yii::app()->user->id;
                    $command=$connection->createCommand($sql);
                    $rows=$command->queryAll();
                    $row = array();
                    foreach ($rows as $r)
                    {
                        //echo $r['g_user'];
                        $sql="SELECT id, u_name FROM tb_user where id=".$r['g_user'];
                        $command=$connection->createCommand($sql);
                        $rows2=$command->queryAll();
                        foreach ($rows2 as $r2)
                        {
                            $row += array($r2['id']=>$r2['u_name']);
                        }
                    }
                    echo CHtml::dropDownList('get_u','get_u',$row);
                    ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'Команда'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Изменить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->