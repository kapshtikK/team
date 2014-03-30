<?php

$this->breadcrumbs=array(
	'все задачи',
);
?>
<table  class="table table-hover"> 
    <tr>
        <th>статус</th>
          <th>название</th>
           <th>дедлайн</th>
           <th>ответственный</th>
            <th>редактировать</th>
        
    </tr>
<?php


foreach($model as $row) //вывод 
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
                        <?php echo CHtml::link('Редактировать',array('/tbtask/update', 'id'=>$row['id'], 'renderTo'=>1)); ?> 

                        </li>

                        <li>
                           <?php echo CHtml::link('Удалить',array('/tbtask/delete', 'id'=>$row['id'], 'renderTo'=>1)); ?>                        
                        </li>

                        <li>
                               <?php echo CHtml::link('Добавить подзадачу',array('tbsubtask/create', 'id'=>$row['id'])); ?>                          
                        </li>

                    </ul>
                    </li>
                        </ul></td></tr>
             
     <?php      
    }	
		
?>

</table>
