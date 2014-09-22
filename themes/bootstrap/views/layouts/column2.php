<style>
    #banner{
        background-image:url('../images/fondo_final.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 250px;
    }
    
    @media (max-width: 767px) {
        #banner{
            height: 250px;
        }
    }
    
    @media (min-width: 768px) and (max-width: 991px) {
        #banner{
            height: 250px;
        }
    }
    
    @media (min-width: 992px) and (max-width: 1199px) {
        #banner{
            height: 250px;
        }
    }
    
    @media (min-width: 1200px) {
        #banner{
            height: 250px;
        }
    }
</style>

<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="banner">
            
        </div>
    </div>
</div>

<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>