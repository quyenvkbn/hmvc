<div id="main" class="wrapper main-project main-gallery">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <?php if(isset($productsList) && is_array($productsList) && count($productsList)){ ?>
            <div class="content-left">
               <h1 class="title-primary"><?php echo $DetailCatalogues['title'] ?></h1>
               <div class="project-home">
                  <?php foreach ($productsList as $key => $val){
                     $href = rewrite_url($val['canonical'],$val['slug'],$val['id'],'products') ?>
                  <div class="item-project wow fadeInUp">
                     <div class="image">
                        <a href="<?php echo $href ?>"><img src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>"></a>
                     </div>
                     <div class="nav-title">
                        <div class="avia-arrow"></div>
                        <h3 class="title"><a href="<?php echo $href ?>"><?php echo $val['title'] ?></a></h3>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="clearfix"></div>
               </div>
               <?php echo isset($PaginationList)?$PaginationList:''; ?>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</div>