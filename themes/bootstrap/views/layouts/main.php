<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<link rel="Shortcut Icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/sol.ico"/>
        <meta name="author" content="Sebastián Franco Brantes - VLEV - ¿y por qué no? - seb.frab@gmail.com"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="language" content="es" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" />   
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/hover.css" />
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
        <!-- Css General -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/init.css" />
        
</head>
    <body>
        
        <header>
        <nav role="navigation">
            <div class="navbar navbar-top">
                <div class="navbar-default navbar-collapse">
                    <div class="container">
                        <div style="text-align: right;" class="col-lg-12 hidden-xs">
                            <a style="margin-right: 30px;" class="glyphicon glyphicon-phone-alt"> 96836377</a>
                            <a class="glyphicon glyphicon-envelope"> contacto@ceypa.cl</a>
                        </div>
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
                                            'class'=>'nav navbar-nav navbar-right',
                                            'id'=>'menu',
                                        ),
                                        'items'=>array(
                                                array('label'=>'<span class="glyphicon glyphicon-thumbs-up"></span> NOSOTROS', 'url'=>'./'),
                                                array('label'=>'<span class="glyphicon glyphicon-pushpin"></span> CURSOS', 'url'=>'./'),
                                                array('label'=>'<span class="glyphicon glyphicon-signal"></span> EXPERIENCIA', 'url'=>'./'),
                                                array('label'=>'<span class="glyphicon glyphicon-envelope"></span> CONTACTO', 'url'=>'#'),
                                        ),
                                    'encodeLabel' => false,
                                )); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
        
    <div id="skrollr-body">
    <?php echo $content; ?>
    </div>
        
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/skrollr.js"></script>
   
    
    <script>
        var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
    </script>
    
    </body>
</html>



