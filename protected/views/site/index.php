<style>
.hsContainer {
    display: table;
    table-layout: fixed;
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    opacity: 0;
}
.hsContent {
    max-width: 450px;
    margin: -150px auto 0 auto;
    display: table-cell;
    vertical-align: middle;
    color: #ebebeb;
    padding: 0 8%;
    text-align: center
}
.bcg {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;
    width: 100%;
}
/* Slide 1 */
#slide-1 .bcg {background-image:url('images/fondo_final.jpg')}

#style{
    text-align: center;
    position:fixed;
    width: 100%;
    margin-top: 200px;
    color: #fff;
}

@media (max-width: 767px) {
    #style{
       font-size: 26px;
       margin-top: 100px;
    }
    
    .bcg {
        height: 360px;
    }
    
    a:hover{
        text-decoration: none;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    #style{
        font-size: 40px;
        margin-top: 200px;
    }
    
    .bcg {
        height: 500px;
    }
    
    a:hover{
        text-decoration: none;
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    #style{
        font-size: 50px;
        margin-top: 200px;
    }
    
    .bcg {
        height: 600px;
    }
    
    a:hover{
        text-decoration: none;
    }
}

@media (min-width: 1200px) {
    #style{
        font-size: 65px;
        margin-top: 200px;
    }
    
    .bcg {
        height: 600px;
    }
}

#cotizar{
    background-color: #fff;
    -webkit-transition: background-color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;
}

#cotizar:hover, #cotizar:active, #cotizar:focus{
    background-color: #099fdc;
    color: #fff;
}
p{
    color: #595959;
}

#owl-demo .item{
    /*background: rgba(255, 253, 77, 0.3);*/
    padding: 2px 1px 2px 1px;
    margin: 10px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}

#owl-demo .item img{
    width: 100%;
    opacity: 2.0;
}

#owl-demo2 .item{
    /*background: rgba(255, 253, 77, 0.3);*/
    padding: 2px 1px 2px 1px;
    margin: 10px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}

#owl-demo2 .item img{
    width: 100%;
    opacity: 2.0;
}

</style>
    
    
<section id="slide-1" class="homeSlide">
    <div class="bcg"
        data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -10px;"
        data-anchor-target="#slide-1"
    >
        <div id="style" data-100="opacity:1;"  data-350="opacity:0;" data-580="opacity:0;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="font-weight: 100; color: #fff;">CENTRO DE ESTUDIOS Y </p>
                        <p style="color: #fff;">PERFECCIONAMIENTO ANDINO</P>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid" >
    <div class="row" style="margin-top: 50px;" id="nosotros">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3 style="text-align: center; font-weight: 300;">Nuestra Misión</h3>
            <span style="font-size: 30px; margin-top: 20px; color: #099fdc;" class="glyphicon glyphicon-thumbs-up col-lg-2 col-md-2 hidden-sm hidden-xs"></span>
            <p style="text-align: justify;" class="col-lg-10 col-md-10 col-sm-12">
                
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3 style="text-align: center; font-weight: 300;">Nuestra Visión</h3>
            <span style="font-size: 30px; margin-top: 20px; color: #099fdc;" class="glyphicon glyphicon-eye-open col-lg-2 col-md-2 hidden-sm hidden-xs"></span>
            <p style="text-align: justify;" class="col-lg-10 col-md-10 col-sm-12">
                
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3 style="text-align: center; font-weight: 300;">¿Qué encontrar?</h3>
            <span style="font-size: 30px; margin-top: 20px; color: #099fdc;" class="glyphicon glyphicon-map-marker col-lg-2 col-md-2 hidden-sm hidden-xs"></span>
            <p style="text-align: justify;" class="col-lg-10 col-md-10 col-sm-12">
                
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus.
            </p>
        </div>
    </div>
    
    
    <div class="row" style="margin-top: 70px;">
        <a href="#">
            <div id="cotizar" class="col-lg-12" style="min-height: 70px; padding-top: 60px; padding-bottom: 60px; border-bottom: 2px solid #D8D8D8; border-top: 2px solid #D8D8D8;">
                <h1 style="padding: 0px; margin: 0px; text-align: center; font-weight: 300; font-size: 26px;">Solicitar cotización para curso <span class="glyphicon glyphicon-share-alt"></span></h1>
            </div>
        </a>
    </div>
    
    
    <div class="row" style="margin-top: 100px;" id="cursos">
        <div  id="row">
                <div class="col-lg-3 col-md-2">
                    <h3>Cursos</h3>
                    <p style="text-align: justify;">
                        Impartimos cursos de capacitación en todo Chile,
                        sobre: Cuidados de ancianos, Higiene, Cuidados de enfermos
                        Ética profesional.
                        
                    </p>
                </div>
                <div class="col-lg-9 col-md-10">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/1rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/2rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/2rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/4.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/2rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/5.jpg" alt="La Rompepaga"/></a></div>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 100px;" id="experiencia">
        <div style="border-top: 1px solid #D8D8D8;" class="col-lg-12">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-1"></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-10">
                <h3 style="text-align: center; background-color: #fff; margin-top: -15px;">Experiencia</h3>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-1"></div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="owl-demo2" class="owl-carousel owl-theme">
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/experiencia/logo_hospital_quilpue.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/experiencia/municipalidad_alto_hospicio.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/experiencia/logo_hospital_metropolitano.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/experiencia/logo_uvm.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/experiencia/logo_hospital_gustavo_fricke.jpg" alt="La Rompepaga"/></a></div>
                        <div class="item"><a href="http://www.larompepaga.cl/wp-content/themes/LaRompe1/images/8rompe.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/experiencia/logo_hospital_van_buren.jpg" alt="La Rompepaga"/></a></div>
                    </div>
                </div>
    </div>
</div>