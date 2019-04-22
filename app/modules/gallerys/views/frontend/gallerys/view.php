<div id="main" class="wrapper">
    <section class="banner">
        <a href=""><img src="templates/frontend/resources/images/bn2.png" alt=" "></a>
        <div class="menu_banner ">
            <ul class="list-unstyled ">
                <li><a href="<?php echo base_url() ?>">Trang chủ</a>/</li>
                <?php if(isset($Breadcrumb) && is_array($Breadcrumb) && count($Breadcrumb)){
                foreach ($Breadcrumb as $key => $val) {
                $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'products_catalogues') ?>
                <li ><a href="<?php echo $href ?>"><?php echo $val['title'] ?> </a></li>
                <?php }} ?>
            </ul>
        </div>
    </section>
    <section class="main-content main-new library-album main-album">
        <div class="container">
            <style>
                .main-album .title-primary{
                     font-size: 20px;
                     text-align: center;
                  }
                  .main-album .title-primary:after{
                         -webkit-transform: translateX(-50%);
                         transform: translateX(-50%);
                         left: 50%;
                  }
            </style>
            <h1 class="title-primary wow fadeInUp ">THƯ VIỆN HÌNH ẢNH</h1>
            <div class="nav-library-album ">
                <div class="row ">
                    <div class="col-md-3 col-sm-3 col-xs-12 ">
                        <div class="item ">
                            <div class="image ">
                                <a class="thmbnail-ab "><img class="example-image " src="<?php echo $DetailGallerys['images'] ?>" alt=" "/></a>
                                <a class=" example-image-link view " href="<?php echo $DetailGallerys['images'] ?>" data-lightbox="example-set " data-title="Click the right half of the image to move forward. "></a>
                            </div>
                        </div>
                    </div>
                    <?php $listItem = json_decode($DetailGallerys['albums'], TRUE); ?>
                    <?php if (isset($listItem) && is_array($listItem) && count($listItem)) { ?>
                        <?php foreach ($listItem as $key => $val) { ?>
                    <div class="col-md-3 col-sm-3 col-xs-12 ">
                        <div class="item ">
                            <div class="image ">
                                <a class="thmbnail-ab "><img class="example-image " src="<?php echo $val['images'] ?>" alt=" "/></a>
                                <a class=" example-image-link view " href="<?php echo $val['images'] ?>" data-lightbox="example-set " data-title="Click the right half of the image to move forward. "></a>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>

        </div>
    </section>
</div>