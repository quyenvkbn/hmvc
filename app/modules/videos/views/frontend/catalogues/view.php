<div id="main" class="wrapper main-video main-new">
    <div class="top-content">
        <div class="container">
            <div class="top-content-child">
                <?php $this->load->view('homepage/frontend/common/slider') ?>
            </div>
        </div>
    </div>
    <section class="new-home">
        <div class="container">
        	<?php if(isset($videosList) && is_array($videosList) && count($videosList)){ ?>
            <div class="new-home-child">
                <h1 class="title1 wow fadeInUp"> <?php echo $DetailCatalogues['title'] ?></h1>
                <div class="content-video">
                    <div class="row">
                    	<?php foreach ($videosList as $key => $val) { ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                            <div class="item-video">
                            	<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo substr($val['videos_code'], 32); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               
                                <h3 class="title"><a href="javascript:void();"><?php echo $val['title'] ?></a></h3>
                            </div>
                        </div>
                        <?php } ?>
                        <?php echo (isset($PaginationList)?$PaginationList:'') ?>
                    </div>
                </div>
            </div>
        	<?php } ?>
        </div>
    </section>
</div>