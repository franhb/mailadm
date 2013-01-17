<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'virtual-aliases-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'domain_id'); ?>
		<?php echo $form->dropDownList($model, 'domain_id', GxHtml::listDataEx(VirtualDomains::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'domain_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model, 'source', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'source'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'destination'); ?>
		<?php echo $form->textField($model, 'destination', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'destination'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
