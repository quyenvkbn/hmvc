<main id="main-site">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 fl-right">
                <div class="right-page">
                    <div class="box-sp-home">
                        <div class="title-box">
                            <h2 class="h2-title"><span><?php echo $this->lang->line('keyword') ?>: <?php echo ((isset($keys)) ? $keys : '') ?></span></h2>
                        </div>
                        <?php if(isset($result) && is_array($result) && count($result)){ ?>
                        <div class="wp-list-sp">
                            <div class="row">
                                <?php foreach ($result as $key => $val) { ?>
                                    <?php $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'products') ?>
                                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                                <div class="item-product">
                                    <div class="image">
                                        <a href="<?php echo $href ?>"><img src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>"></a>
                                    </div>
                                    <h3 class="title-pr"><a href="<?php echo $href ?>"><?php echo $val['title'] ?></a></h3>
                                    <p class="price">Giá: <span><?php if($val['saleoff'] > 0){ echo str_replace(',', '.', number_format($val['saleoff'])).' ₫'; }elseif($val['saleoff'] == 0 && $val['price'] > 0){echo str_replace(',', '.', number_format($val['price'])).' ₫';}else{echo 'Liên hệ';} ?></span>
                                    </p>
                                </div>
                            </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php echo (isset($PaginationList)) ? $PaginationList : ''; ?>
                        <?php }else{echo 'Không tìm được kết quả nào. Vui lòng thử lại với từ khóa khác';} ?>
                    </div>
                </div>
            </div>
            <?php $this->load->view('homepage/frontend/common/aside') ?>
        </div>
    </div>
</main>
