<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
<div class="col-sm-8 blog-main">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		<div id="sidebar">
			<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

				<?php $this->widget('TagCloud', array(
					'maxTags'=>Yii::app()->params['tagCloudCount'],
					)); ?>

				<?php $this->widget('RecentComments', array(
					'maxComments'=>Yii::app()->params['recentCommentCount'],
					)); ?>	
				</div><!-- sidebar -->
			</div>
		</div>
	<?php $this->endContent(); ?>