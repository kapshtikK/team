<?php

$this->breadcrumbs=array(
	'все проекты',
);
?>



<table  class="table table-hover"> 
    <tr>
        <th>статус</th>
         <th>название</th>
          <th>задачи</th>
           <th>менеджер</th>
            <th>редактировать</th>
        
    </tr>
<?php 
foreach($tableProject as $row) //вывод 
{
    echo "<tr>".
            "<td>".$row['status']."</td>".
            "<td>";
 ?>
    <a href ="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbproject/view/<?php echo $row['id'];?>" > 
            <?php echo$row['name']; ?>
    </a>
<?php 
           echo "</td>".
            "<td>".$row['countW']."</td>".
            "<td>".$row['firstName']."</td>".
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
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbproject/update/<?php echo $row['id'];?>"> <div>Редактировать</div></a>                          
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbproject/delete/<?php echo $row['id'];?>"> <div>Удалить</div></a>                          
                                    </li>
                       
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbproject/view/<?php echo $row['id'];?>" <div>Просмотреть</div></a>                          
                                    </li>
                                 
                                </ul>
                    </li>
                        </ul></td></tr>
             
     <?php      
    }	
		
?>

</table>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
