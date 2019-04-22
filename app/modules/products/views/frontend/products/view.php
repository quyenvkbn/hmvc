<div id="main" class="wrapper main-project main-detail-product main-gallery-detail main-gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="content-left">
                    <h1 class="title-primary"><?php echo $DetailProducts['title'] ?></h1>
                    <div class="project-home">
                        <?php $albums = json_decode($DetailProducts['albums'],TRUE) ?>
                        <?php if(isset($albums) && is_array($albums) && count($albums)){
                            foreach($albums as $key => $val){ ?>
                        <div class="item-project wow fadeInUp">
                            <div class="image">
                                <a href="<?php echo $val['images'] ?>" class="example-image-link"
                                    data-lightbox="example-set"><img src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>"></a>
                            </div>
                        </div>
                        <?php }} ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>