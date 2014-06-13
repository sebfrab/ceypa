<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<link rel="Shortcut Icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/sol.ico"/>
        <meta name="author" content="Sebastián Franco Brantes - VLEV - ¿y por qué no? - seb.frab@gmail.com"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="language" content="es" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" />   
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
        <!-- Css General -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" />
</head>
    <body>
        
        <header>
        <nav role="navigation">
            <div class="navbar navbar-top">
                <div  id="barraSuperior"  class="navbar-inverse navbar-collapse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="navbar-brand"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ceypaLogo.jpg" /></a>
                        </div>

                        <div class="navbar-collapse bs-js-navbar-collapse collapse">

                                <?php $this->widget('zii.widgets.CMenu',array(
                                        'htmlOptions' => array(
                                            'class'=>'nav navbar-nav',
                                            'id'=>'menu',
                                        ),
                                        'items'=>array(
                                                array('label'=>'<span class="glyphicon glyphicon-share"></span> Home', 'url'=>'./'),
                                                array('label'=>'<span class="glyphicon glyphicon-envelope"></span> Contacto', 'url'=>'#'),
                                        ),
                                    'encodeLabel' => false,
                                )); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
        

    <?php echo $content; ?>


        <footer>
            <div id="footer" class="container-fluid">
                    <div class="row">
                    <div lass="col-lg-12">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ceypaLogo.jpg" />
                    </div>
                </div>
                
            </div>
            
            
            <div id="vlev" class="container-fluid">
                <div class="row">
                    <div class="col-lg-9"></div>
                    <div id="author" class="col-lg-3">
                        <a href="#" title="&#191; y por qu&eacute; no &#63; / seb.frab@gmail.com">
                            <p>
                                ¿y por qué no? 
                                <p style="font-weight: bold; font-size: 12px;">Sebasti&aacute;n Franco</p>
                            </p>
                        </a>
                    </div>
                </div>
            </div> 
        </footer>
    </body>
    
    
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/collapse.js"></script>
</html>



