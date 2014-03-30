<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin.css" />  
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/font-awesome.css" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    
     <div id="wrapper">
         <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">QDS Team</a>
<h5 style ="background-color:#BCE8F1; height:40px;" align="right"><?php echo Yii::app()->user->name ?>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout" >
              <button class="btn btn-info"><i class="fa fa-times"></i>logout</button></a></h5>

        <nav role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse">
                <ul id="side-menu" class="nav">
                   
                    <li >
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" ><button class="btn btn-success" style="width:90%">
                                Создать....
                            </button>
                        </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                     <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbproject/create"> <div>Проект</div></a>                          
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbmilestone/create"> <div>Веху</div></a>                          
                                    </li>
                       
                                    <li>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tbtask/create"> <div>Задачу</div></a>                          
                                    </li>
                                 
                                </ul>
                 
                    <li>
                        <a href="#">Проекты<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbproject/index/1'); ?>">Все проекты</a>
                            </li>
                            
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbproject/index/10'); ?>">Мои проекты</a>
                            </li>

                            <li>
                                 <a href="<?php echo $this->createUrl('Tbproject/index'); ?>">Активные</a>
                            </li>
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbproject/index'); ?>">Приостановленные</a>
                            </li>
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbproject/index'); ?>">Закрытые</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#">Вехи<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbmilestone/index/1'); ?>">Все вехи</a>
                                   
                            </li>
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbmilestone/index/10'); ?>">Мои вехи</a>
                                   
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#">Задачи<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                             <li>
                                 <a href="<?php echo $this->createUrl('Tbtask/index/1'); ?>">Все задачи</a>
                                   
                            </li>
                            <li>
                                 <a href="<?php echo $this->createUrl('Tbtask/index/10'); ?>">Мои задачи</a>
                                   
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">Таймер</a>
                    </li>

                    
                    
                    
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <!-- /#page-wrapper -->

    </div>
    <div id="page-wrapper">
        <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
 <?php echo $content; ?>
</div>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/sb-admin.js"></script>
</body>
</html>
