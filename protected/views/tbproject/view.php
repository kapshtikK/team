<?php
/* @var $this TbprojectController */
/* @var $model Tbproject */

$this->breadcrumbs=array(
	'проекты'=>array('index'),
	$model->pr_name,
);
?>

 
<div class="panel panel-success">
    <div class="panel-heading"> <?php echo $model->pr_name ?> 
    <!-- отрисовка кнопки с названием проекта и выпадающего меню -->
         <ul id="side-menu" class="nav">
              <li >
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="background-color:white" ><button class="btn btn-default btn-circle" ><i class="fa fa-check"></i> </button>                                                 
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                            <li>
                               <?php echo CHtml::link('Редактировать',array('/tbproject/update', 'id'=>$model->id)); ?>
                           </li>

                           <li>
                                <?php echo CHtml::link('Удалить',array('/tbproject/delete', 'id'=>$model->id)); ?>
                           </li>
                    </ul>
            </li>
        </ul>
    
    
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#tasks">Задачи</a>
            </li>
            <li>
                <a data-toggle="tab" href="#milestones">Вехи</a>
            </li>
            <li>
                <a data-toggle="tab" href="#timer">Учет времени</a>
            </li>
            <li>
                <a data-toggle="tab" href="#team">Команда</a>
            </li>
            <li >
                <a data-toggle="tab" href="#description">Общие сведения</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="tasks" class="tab-pane fade in active">
                <br/><h4>Задачи проекта</h4><br/>
                    <table  class="table table-hover"> 
                            <tr>
                                <th>статус</th>
                                <th>название</th>
                                <th>дедлайн</th>
                                <th>ответственный</th>
                                <th>редактировать</th>

                            </tr>
                        <?php
                        foreach($modelTask as $row) //вывод 
                        {
                            echo "<tr>".
                                    "<td>".$row['tStatus']['s_name']."</td>";

                                    echo "<td>";
                         ?>
                            <a href ="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/view/<?php echo $row['id'];?>" > 
                                    <?php echo$row['t_name']; ?>
                            </a>
                        <?php 
                                   echo "</td>".
                                    "<td>".$row['t_deadline']."</td>".
                                    "<td>".$row['tResponsible']['u_name']."</td>".
                                      '<td><ul id="side-menu" class="nav">

                                            <li >
                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="width:60px" >
                                                    <button class="btn btn-default btn-circle" >
                                                          <i class="fa fa-check"></i> 
                                                    </button>
                                                </a>
                                                        <ul class="dropdown-menu dropdown-alerts">
                                                             <li>';
                                   ?>                          
                                         <?php echo CHtml::link('Редактировать',array('/tbtask/update', 'id'=> $row['id'])); ?>
                                                               <!-- <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/update/<?php echo $row['id'];?>"> <div>Редактировать</div></a>      -->                    
                                                            </li>

                                                            <li>
                                                                <?php echo CHtml::link('Удалить',array('/tbtask/delete', 'id'=> $row['id'], 'renderTo'=>2, 'idProject'=>$model->id)); ?>
                                                                <!--<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/delete/<?php echo $row['id'];?>"> <div>Удалить</div></a>-->                          
                                                            </li>

                                                            <li>
                                                               <?php echo CHtml::link('Добавить подзадачу',array('tbsubtask/create', 'id'=>$row['id'])); ?> 
                                                                <!--<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/create"> <div>Добавить новую задачу</div></a>-->                          
                                                            </li>

                                                        </ul>
                                            </li>
                                                </ul></td></tr>

                             <?php      
                            }	

                        ?>

                        </table>
            </div>
  <!--111111111111111111111111111111111111111111111111111111111111111111111111-->          
            <div id="milestones" class="tab-pane fade">
                <h4>Вехи проекта</h4>
                <table  class="table table-hover"> 
                    <tr>
                        <th>статус</th>
                        <th>важность </th>
                        <th>название</th>
                        <th>дедлайн</th>
                        <th>ответственный</th>
                        <th>редактировать</th>
                    </tr>
    <?php


foreach($modelMilestone as $row) //вывод 
{
    echo "<tr>".
            "<td>".$row['mStatus']['s_name']."</td>";
             if($row['m_type'])
            {
             echo "<td>ключевая</td>";
            }
            else {
                echo "<td></td>";
            }
            echo "<td>";
 ?>
    <a href ="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbmilestone/view/<?php echo $row['id'];?>" > 
            <?php echo$row['m_name']; ?>
    </a>
<?php 
           echo "</td>".
            "<td>".$row['m_deadline']."</td>".
            "<td>".$row['mResponsible']['u_name']."</td>".
              '<td><ul id="side-menu" class="nav">
                   
                    <li >
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="width:60px" >
                            <button class="btn btn-default btn-circle" >
                                  <i class="fa fa-check"></i> 
                            </button>
                        </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                     <li>';
           ?>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbmilestone/update/<?php echo $row['id'];?>"> <div>Редактировать</div></a>                          
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbmilestone/delete/<?php echo $row['id'];?>"> <div>Удалить</div></a>                          
                                    </li>
                       
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/create"> <div>Поставить новую задачу</div></a>                          
                                    </li>
                                 
                                </ul>
                    </li>
                        </ul></td></tr>
             
     <?php      
    }	
		
?>

</table>
</div>
            
          <div id="timer" class="tab-pane fade">
              <h4>Учет времени</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="team" class="tab-pane fade">
              <h4>Команда проекта</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="description" class="tab-pane fade">
              <h4>Сведения о проекте</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>
 </div>
</div>