<article class="conf-place">
<?php $form= $this->beginWidget('CActiveForm', array(
	'id'=>'reg-form',
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <fieldset>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array( 'id' => "text0")); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'company', array( 'id' => "text1")); ?>
		<?php echo $form->textField($model,'company', array( 'id' => "text1")); ?>
		<?php echo $form->error($model,'company', array( 'id' => "text1")); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'position', array( 'id' => "text2")); ?>
		<?php echo $form->textField($model,'position', array( 'id' => "text2")); ?>
		<?php echo $form->error($model,'position', array( 'id' => "text2")); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'email', array( 'id' => "text3")); ?>
		<?php echo $form->textField($model,'email', array( 'id' => "text3")); ?>
		<?php echo $form->error($model,'email', array( 'id' => "text3")); ?>
	</div>
	<?php if(CCaptcha::checkRequirements()): ?>
	<!--<div class="row">
		<?php echo $form->labelEx($model,'verifyCode', array( 'id' => "text4")); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode', array( 'id' => "text4")); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode', array( 'id' => "text4")); ?>
	</div> -->
	<?php endif; ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array( 'id' => "submit")); ?>
	</div>
    </fieldset>
<?php $this->endWidget(); ?>
    
    
    
    
</article>