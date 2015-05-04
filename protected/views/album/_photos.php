<?php $this->widget('zii.widgets.grid.CGridView', array(
	//'id'=>'photo-grid',
	'dataProvider'=>$photos->search(),
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Display {start} - {end} of {count} cool records',
	'htmlOptions' => array('class' => 'grid-view rounded'),
	//'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'thumb',
			'type'=>'raw',
			'value'=>'$data->getThumbnail()',
			),
		'caption',
		'alt_text',
		'sort_order',
		//'tags',
		/*
		'sort_order',
		'created_dt',
		'lastupdate_dt',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Action',
		    'template'=>'{update} {delete}',
            'viewButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-view.png',
            'updateButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-update.png',
            'deleteButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-delete.png',
		),
	),
)); ?>