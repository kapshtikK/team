<?php

$this->breadcrumbs=array(
	'все вехи',
);
?>
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


foreach($model as $row) //вывод 
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
                        <a class="dropdown-toggle externalBut" href="#" data-toggle="dropdown" >
                            <button class="btn btn-default btn-circle intBut" >
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


          
             
