<h1>
    <?php 
        if(Yii::app()->user->checkAccess('Administrator')){
            echo "hello, I'm administrator";
        }
    ?>
</h1>