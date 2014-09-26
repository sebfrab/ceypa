<style>
    #banner{
        background-image:url('../images/slide2.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 200px;
    }
    
    #banner>.container>p{
        font-size: 45px;
    }
    
    @media (max-width: 767px) {
        #banner{
            height: 200px;
        }
    }
    
    @media (min-width: 768px) and (max-width: 991px) {
        #banner{
            height: 200px;
        }
    }
    
    @media (min-width: 992px) and (max-width: 1199px) {
        #banner{
            height: 200px;
        }
    }
    
    @media (min-width: 1200px) {
        #banner{
            height: 200px;
        }
    }
    
    p {
        color: #595959;
    }
    label{
        color: #595959;
    }
</style>

<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="banner">
            <div class="container">
                <p style="font-weight: 100; color: #fff; margin-top: 60px;">Capacitamos con salud</p>
            </div>
            
        </div>
    </div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-12">
		<?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>