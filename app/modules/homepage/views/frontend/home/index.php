<h1 style="display: none;"><?php echo $this->fcSystem['seo_meta_title'] ?></h1>
<div id="main" class="wrapper">
    <div class="top-content">
        <div class="container">
            <div class="top-content-child">
                <div class="row">
                    <?php if(isset($gioithieu) && is_array($gioithieu) && count($gioithieu)){ ?>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <?php foreach ($gioithieu as $key => $val) {
                        $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'articles') ?>
                        <div class="top-content-right">
                            <h3 class="title"><?php echo $val['title'] ?></h3>
                            <p class="desc"><?php echo strip_tags($val['description']) ?></p>
                            <div class="tranform"><img src="templates/frontend/resources/images/icon.png" alt=""></div>
                            <a href="<?php echo $href ?>" class="more">more</a>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <?php $this->load->view('homepage/frontend/common/slider') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($tintuc) && is_array($tintuc) && count($tintuc)){
    foreach ($tintuc as $key => $val) {
    $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'articles_catalogues') ?>
    <section class="new-home">
        <div class="container">
            <div class="new-home-child">
                <h3 class="title-new"><?php echo $val['title'] ?></h3>
                <?php if(isset($val['post']) && is_array($val['post']) && count($val['post'])){ ?>
                <div class="nav-new-home">
                    <?php foreach ($val['post'] as $key => $val1) {
                    $hr = rewrite_url($val1['canonical'],$val1['slug'],$val1['id'],'articles') ?>
                    <div class="item-new wow fadeInUp">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="image"><a href="<?php echo $hr ?>"><img src="<?php echo $val1['images'] ?>" alt="<?php echo $val1['title'] ?>"></a></div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="nav-image">
                                    <div class="date">
                                        <span class="date1"><?php echo show_time($val1['created'],'d') ?></span>
                                        <span class="month"><?php echo show_time($val1['created'],'m/y') ?></span>
                                    </div>
                                    <div class="nav-img-content">
                                        <h3 class="title"><a href="<?php echo $hr ?>"><?php echo $val1['title'] ?></a></h3>
                                        <div class="description">
                                            <p class="desc"><?php echo strip_tags($val1['description']) ?></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <a href="<?php echo $href ?>" class="readmore">Read more</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php }} ?>
    <section class="libarary-home wow fadeInUp">
        <div class="container">
            <div class="nav-library-video ml40">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video">
                            <h3 class="title">Videos</h3>
                            <div class="nav-item">
                                <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo substr($this->fcSystem['homepage_vidu'], 32); ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($gallery) && is_array($gallery) && count($gallery)){ ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php foreach ($gallery as $key => $val) {
                        $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'gallerys_catalogues') ?>
                        <div class="album">
                            <h3 class="title"><?php echo $val['title'] ?></h3>
                            <div class="nav-item">
                                <div class="image"><a href="<?php echo $href ?>"><img src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>"></a></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php $partner = $this->FrontendSlides_Model->Read('partner',$this->fc_lang) ?>
    <?php if(isset($partner) && is_array($partner) && count($partner)){ ?>
    <section class="partner-home  wow fadeInUp">
        <div class="container">
            <div class="nav-partner-home ml40">
                <div class="slider-partner owl-carousel">
                    <?php foreach ($partner as $key => $val) { ?>
                    <div class="item">
                        <a href="<?php echo $val['url'] ?>"><img src="<?php echo $val['image'] ?>" alt="<?php echo $val['title'] ?>"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
</div>