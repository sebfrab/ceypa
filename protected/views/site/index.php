<div id="principal" class="jumbotron">
    <br/>
    <br/>
    <div class="container">
        <div class="col-lg-7 col-md-7 col-sm-6"></div>
            
        <div class="col-lg-5 col-md-5 col-sm-6">
            <h2>Centro de Estudios y Perfeccionamiento Andino</h2>
            <p>Capacitaciones y cursos certificados del area de la salud</p>
            <p><a class="btn btn-info btn-lg" role="button">Contactanos</a></p>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>




<div style="padding-top: 50px;">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                
            </div>
            <div class="col-lg-8">
                <h1 style="text-align: center;">Escríbenos o llámanos, responderemos a la brevedad </h1>

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
            <div class="col-lg-2">
                
            </div>
        </div>
    </div>
    


</div>