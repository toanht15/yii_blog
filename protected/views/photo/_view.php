<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<div class="view">

    <div class="imgWrap" style="width: <?php echo Yii::app()->params['thumbSize']; ?>px ; height: <?php echo Yii::app()->params['thumbSize']; ?>px">
        <?php
            echo CHtml::link(
                    CHtml::image(Yii::app()->getBaseUrl(true).$data->getThumb(),
                            CHtml::encode($data->alt_text),array()) ,
                    Yii::app()->getBaseUrl().$data->getUrl(),
                    array('rel'=>'colorBox','title'=>CHtml::encode($data->alt_text))
                    );
    ?>
    <?php //echo Yii::getPathOfAlias('webroot').$data->getUrl(); ?>
    <?php  //echo CHtml::image(Yii::app()->getBaseUrl(true).$data->getUrl());?>
    <?php //echo CHtml::image(Yii::getPathOfAlias('webroot').$data->getUrl());?>
    
    </div>
    <div class="caption">
        <?php echo CHtml::encode($data->caption); ?>


    </div>


</div>
