<div class="view">


	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->email), array('view', 'id' => $data->id)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('domain_id')); ?>:
	<?php echo GxHtml::encode($data->domain); ?>
	<br />

</div>
