<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="8u">
	<section class="left-content">
		<?php echo $content; ?>
	</section><!-- content -->
</div>
<div class="4u">
	<section>
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</section><!-- sidebar -->
</div>
<?php $this->endContent(); ?>