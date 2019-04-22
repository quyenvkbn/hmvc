<div id="main" class="wrapper main-new">
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
                <h1 class="title1"> <?php echo $DetailCatalogues['title'] ?></h1>
                <div class="nav-new-home">
                    <?php if(isset($ArticlesList) && is_array($ArticlesList) && count($ArticlesList)){
                    foreach ($ArticlesList as $key => $val) {
                    $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'articles') ?>
                    <div class="item-new wow fadeInUp">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="image"><a href="<?php echo $href ?>"><img src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>"></a></div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="nav-image">
                                    <div class="nav-img-content">
                                        <h3 class="title"><a href="<?php echo $href ?>"><?php echo $val['title'] ?></a></h3>
                                        <p class="date-new"><?php echo show_time($val['created'],'d/m/y') ?></p>
                                        <div class="description">
                                            <p class="desc"><?php echo strip_tags($val['description']); ?></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
                <?php echo (isset($PaginationList)?$PaginationList:'') ?>
            </div>
        </div>
    </section>
</div>