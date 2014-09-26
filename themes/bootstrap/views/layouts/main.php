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
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.theme.css" />
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
        <!-- Css General -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/init.css" />
        
</head>
    <body>
        <div id="skrollr-body">
        <header>
        <nav role="navigation">
            <div class="navbar navbar-top">
                <div class="navbar-default navbar-collapse">
                    <div class="container">
                        <div style="text-align: right;" class="col-lg-12 hidden-xs">
                            <a style="margin-right: 30px;" class="glyphicon glyphicon-phone-alt" href="tel:+56996836377"> (<span style="font-size: 8px;">+</span>569) 996836377</a>
                            <a class="glyphicon glyphicon-envelope" href="mailto:contacto@ceypa.cl"> contacto@ceypa.cl</a>
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
                                                array('label'=>'<span class="glyphicon glyphicon-thumbs-up"></span> NOSOTROS', 'url'=>'./#nosotros'),
                                                array('label'=>'<span class="glyphicon glyphicon-pushpin"></span> CURSOS', 'url'=>'./#cursos'),
                                                array('label'=>'<span class="glyphicon glyphicon-signal"></span> EXPERIENCIA', 'url'=>'./#experiencia'),
                                                array('label'=>'<span class="glyphicon glyphicon-envelope"></span> CONTACTO', 'url'=>'site/Contact'),
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
            
    <div class="container-fluid" id="footer_zigzag">
    </div>
    
    <div class="container-fluid" style="background-color: #099fdc; padding-top: 60px;">
        <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ceypaLogo.jpg" style="margin-bottom: 10px;" />
                <p style="color: #fff;">
                    orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                    commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, 
                    nascetur ridiculus mus.
                </p>
            </div>
            <div class="col-lg-4">
                <h3 style="margin: 0px; color: #fff;">Cursos</h3>
                <br/>
                <ul id="cursos_footer">
                    <li><a href="#">Cuidados de ancianos</a></li>
                    <li><a href="#">Higiene</a></li>
                    <li><a href="#">Cuidados de enfermos</a></li>
                    <li><a href="#">Ética profesional</a></li>
                </ul>
            </div>
            
            <div class="col-lg-4">
                <h3 style="margin: 0px; color: #fff;">Experiencia</h3>
                <br/>
                <ul id="experiencia_footer">
                    <li><a href="#">Hospital de Quilpué</a></li>
                    <li><a href="#">Hospital de Alto Hospicio</a></li>
                    <li><a href="#">Hospital Metropolitano de Santiago</a></li>
                    <li><a href="#">Universidad Viña del Mar</a></li>
                </ul>
            </div>
        </div>
        
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-12" style="border-top: 1px solid #BDBDBD; padding-top: 30px; padding-bottom: 50px;">
                <p class="col-lg-8">
                   <a style="color: #fff;" class="glyphicon glyphicon-phone-alt" href="tel:+56996836377"> (<span style="font-size: 8px;">+</span>569) 996836377</a><br/>
                   <a style="color: #fff; margin-top: 5px;" class="glyphicon glyphicon-envelope" href="mailto:contacto@ceypa.cl"> contacto@ceypa.cl</a> 
                </p>  
                <object style="height: 100px;" class="col-lg-4" type="text/html" data="http://sefb.cl">
                    <p>Sebastian Franco Brantes</p>
                </object>
            </div>
        </div>
        </div>
    </div>   
        
    </div>
        
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/skrollr.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.carousel.js"></script>
    
    <script>
        var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
            }
        });
    
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : false
            });
            
            $("#owl-demo2").owlCarousel({
                navigation : false
            });
        });
    </script>
    
    </body>
</html>



