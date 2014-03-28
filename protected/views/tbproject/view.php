<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'проекты'=>array('index'),
	$model->pr_name,
);
?><!-- отрисовка кнопки с названием проекта и выпадающего меню -->
         <ul id="side-menu" class="nav">
              <li >
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="width:11%" ><button class="btn btn-success" style="width:auto"><?php echo $model->pr_name; ?> </button>                                                 
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                            <li>
                               <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbproject/create"> <div>Редактировать</div></a>                          
                           </li>

                           <li>
                               <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbmilestone/create"> <div>Удалить</div></a>                          
                           </li>

                           <li>
                               <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/create"> <div>Просмотреть</div></a>                          
                           </li>
                    </ul>
            </li>
        </ul>



                               



        <?php $this->renderPartial('_viewTask', array('model'=>$model)); ?>

<?php /* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pr_name',
		'pr_specification',
		'pr_date_create',
		'pr_status',
		'pr_user',
	),
)); 
 */ 

?>

 
