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
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/update/<?php echo $row['id'];?>"> <div>Редактировать</div></a>                          
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/delete/<?php echo $row['id'];?>"> <div>Удалить</div></a>                          
                                    </li>
                       
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/create"> <div>Добавить новую задачу</div></a>                          
                                    </li>
                                 
                                </ul>
                    </li>
                        </ul></td></tr>
             
     <?php      
    }	
		
?>

</table>
