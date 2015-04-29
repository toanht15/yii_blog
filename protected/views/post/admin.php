<?php
$this->breadcrumbs=array(
    'Manage Posts',
);
?>
<h2>Manage Posts</h2>

 
<?php /*$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$model->search(),
    //'filter'=>$model,
    'columns'=>array(
        array(
            'name'=>'title',
            'type'=>'raw',
            'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
        ),
        array(
            'name'=>'status',
            'value'=>'Lookup::item("PostStatus",$data->status)',
            'filter'=>Lookup::items('PostStatus'),
        ),
        array(
            'name'=>'create_time',
            'type'=>'datetime',
            'filter'=>false,
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
));*/ ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $model->search(),
        'filter' => $model,
        //lets tell the pager to use our own css file
        'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
        //the same for our entire grid. Note that this value can be set to "false"
        //if you set this to false, you'll have to include the styles for grid in some of your css files
        //'cssFile'=>false,
        'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
        //changing the text above the grid can be fun
        'summaryText' => 'Display {start} - {end} of {count} cool records',
        //and you can even set your own css class to the grid container
        'htmlOptions' => array('class' => 'grid-view rounded'),
        'columns' => array(
            array(
                'name'=>'title',
                'type'=>'raw',
                'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
                ),
            array(
                'name'=>'status',
                'value'=>'Lookup::item("PostStatus",$data->status)',
                'filter'=>Lookup::items('PostStatus'),
                ),
            array(
                'name'=>'create_time',
                'type'=>'datetime',
                'filter'=>false,
                ),
                //styling default buttons
            array(
                'header' => 'Actions',
                'class' => 'CButtonColumn',
                'viewButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-view.png',
                'updateButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-update.png',
                'deleteButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-delete.png',
                ),
            ),
));

?>