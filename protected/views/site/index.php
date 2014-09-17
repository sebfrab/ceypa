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
#slide-1 .bcg {background-image:url('images/fondo3.jpg')}

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
}

@media (min-width: 768px) and (max-width: 991px) {
    #style{
        font-size: 40px;
        margin-top: 200px;
    }
    
    .bcg {
        height: 500px;
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
}

@media (min-width: 1200px) {
    #style{
        font-size: 65px;
        margin-top: 250px;
    }
    
    .bcg {
        height: 700px;
    }
}

#cotizar{
    background-color: #fff;
    
    -webkit-transition: background-color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;

}

#cotizar:hover{
    background-color: #099fdc;
    color: #fff;
}

</style>
    
    
<section id="slide-1" class="homeSlide">
    <div class="bcg"
        data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#slide-1"
    >
        <div id="style" data-100="opacity:1;"  data-350="opacity:0;" data-700="opacity:0;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="font-weight: 100;">CENTRO DE ESTUDIOS Y </p>
                        <p>PERFECCIONAMIENTO ANDINO</P>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid" >
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-4">
            <h3 style="text-align: center; font-weight: 300;">Nuestra Misión</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus.</p>
        </div>
        <div class="col-lg-4">
            <h3 style="text-align: center; font-weight: 300;">Nuestra Visión</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus.</p>
        </div>
        <div class="col-lg-4">
            <h3 style="text-align: center; font-weight: 300;">¿Qué puedes encontrar?</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
                commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus.</p>
        </div>
    </div>
    
    
    <div class="row" style="margin-top: 50px;">
        <div id="cotizar" class="col-lg-12" style="min-height: 70px; padding-top: 60px; padding-bottom: 60px; border-bottom: 2px solid #D8D8D8; border-top: 2px solid #D8D8D8;">
            <h1 style="padding: 0px; margin: 0px; text-align: center; font-weight: 300; font-size: 26px;">Solicitar cotización para curso <span class="glyphicon glyphicon-share-alt"></span></h1>
            
        </div>
    </div>
    
</div>