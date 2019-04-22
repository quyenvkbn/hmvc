<div id="main" class="wrapper main-library main-new">
    <div class="top-content">
        <div class="container">
            <div class="top-content-child">
                <?php $this->load->view('homepage/frontend/common/slider') ?>
            </div>
        </div>
    </div>
    <section class="new-home">
        <div class="container">
            <div class="new-home-child">
                <h1 class="title1 wow fadeInUp"> <?php echo $DetailCatalogues['title'] ?></h1>
                    <?php if(isset($gallerysList) && count($gallerysList) && is_array($gallerysList)){ ?>
                    <div class="content-video">
                        <div class="row">
                            <?php foreach ($gallerysList as $key => $val) { ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp">
                                <div class="item-album">
                                    <a class="example-image-link" href="<?php echo $val['images'] ?>"
                                        data-lightbox="example-set"
                                        data-title="<?php echo $val['title'] ?>"><img class="example-image" src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>" /></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php echo (isset($PaginationList)?$PaginationList:'') ?>
                    </div>
                    <?php } ?>
            </div>
        </div>
    </section>
</div>