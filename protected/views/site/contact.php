

<div class="col-lg-7">

<h3 style="text-align: justify;">Escríbenos o llámanos, responderemos a la brevedad </h3>
<br/>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'name',array('class'=>'form-control')) ?>
		<?php echo $form->error($model,'name',array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'email',array('class'=>'form-control')) ?>
		<?php echo $form->error($model,'email',array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'subject',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128, 'class'=>'form-control')) ?>
		<?php echo $form->error($model,'subject',array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'body',array('class'=>'control-label')); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')) ?>
		<?php echo $form->error($model,'body',array('class'=>'alert alert-danger')); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'verifyCode',array('class'=>'control-label')); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode',array('class'=>'form-control')) ?>
		</div>
		<?php echo $form->error($model,'verifyCode',array('class'=>'alert alert-danger')); ?>
	</div>
	<?php endif; ?>

	<div class="form-group">
		<?php echo CHtml::submitButton('enviar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>

</div>

<div class="col-lg-1"></div>

<div class="col-lg-4" style="padding-top: 90px;">
    <p style="text-align: justify;">
        Póngase en contacto con Ceypa, 
        utilice el siguiente formulario para cotizar, 
        consultar y otros. Responderemos en las proximas horas . 
    </p>
        <p>
                   <a style="" class="glyphicon glyphicon-phone-alt" href="tel:+56996836377"> (<span style="font-size: 8px;">+</span>569) 996836377</a><br/>
                   <a style=" margin-top: 5px;" class="glyphicon glyphicon-envelope" href="mailto:contacto@ceypa.cl"> contacto@ceypa.cl</a> 
     </p>  
</div>
