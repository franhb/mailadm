<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('source')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->source), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('domain_id')); ?>:
	<?php echo GxHtml::encode($data->domain); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('destination')); ?>:
	<?php echo GxHtml::encode($data->destination); ?>
	<br />

</div>
