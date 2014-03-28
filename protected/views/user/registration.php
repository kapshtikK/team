<h1>Регистрация</h1>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <div class="row">
            <?php echo $form->labelEx($model,'Инициалы'); ?>
            <?php echo $form->textField($model,'u_name', array('placeholder'=>'initials', 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'u_name'); ?>
    </div>
    
    <div class="row">
            <?php echo $form->labelEx($model,'Логин'); ?>
            <?php echo $form->textField($model,'u_login', array('placeholder'=>'login', 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'u_login'); ?>
    </div>

    <div class="row">
            <?php echo $form->labelEx($model,'Пароль'); ?>
            <?php echo $form->passwordField($model,'u_password', array('placeholder'=>'password', 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'u_password'); ?>
    </div>

    <div class="row buttons">
            <?php echo CHtml::submitButton('Зарегистрироваться', array('class'=>'btn btn-default')); ?>
    </div>

<?php $this->endWidget(); ?>
</div>