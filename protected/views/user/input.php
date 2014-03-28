<h1>Вход</h1>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <div class="row">
            <?php echo $form->labelEx($model,'Логин'); ?>
            <?php echo $form->textField($model,'u_login',array('placeholder'=>'login', 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'u_login'); ?>
    </div>

    <div class="row">
            <?php echo $form->labelEx($model,'Пароль'); ?>
            <?php echo $form->passwordField($model,'u_password', array('placeholder'=>'password', 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'u_password'); ?>
    </div>
    
    <div class="row">
        <?php 
            echo CHtml::checkBox('rememberMe');
            echo ' Запомнить вас? '; 
        ?>
    </div>

    <div class="row buttons">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/recovery/index">Забыли пароль?</a>
            <?php echo CHtml::submitButton('Input', array('class'=>'btn btn-default')); ?>
            <br />
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/registration">Зарегистрироваться</a>
    </div>

<?php $this->endWidget(); ?>
</div>