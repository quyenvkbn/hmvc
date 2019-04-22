
<main class="main-site_bar">
	<div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
            	<div class="nav-main-content">
            		<div class="title-page">
                       
                    </div>
                    <div class="new-home">
                    	<?php if(isset($keys)){ ?>
                    	<h1 class="title22">Tìm kiếm từ khóa: <?php echo $keys ?></h1>
                    	<?php } ?>
                        <div class="">
							<?php if(isset($result) && is_array($result) && count($result)){ ?>
								<?php foreach($result as $key => $val) { ?> 
									<?php 
										$title = $val['title'];
										$href = rewrite_url($val['canonical'], $val['slug'], $val['id'], 'articles');
										$image = getthumb($val['images'], TRUE);
										$created = show_time($val['created'], 'd/m/Y');
										$description = cutnchar(strip_tags($val['description']), 250);
										$catalogues = Load_catagoies(json_decode($val['catalogues'], TRUE), 'articles');
									?>
									<div class="col-md-4 col-sm-4 col-xs-12">
	                                    <div class="content-new-thumbnail">
	                                        <div class="item  wow fadeInUp">
	                                            <div class="img">
	                                                <a href="<?php echo $href ?>"><img src="<?php echo $val['images'] ?>" alt="<?php echo $val['title'] ?>"></a>
	                                            </div>
	                                            <div class="nav-img">
	                                                <h3 class="title"><a href="<?php echo $href ?>"><?php echo $val['title'] ?></a></h3>
	                                                <div class="date-view">
	                                                    <ul>
	                                                        <li> <i class="fas fa-table"></i><?php echo strip_tags($val['created'],'d/m/Y') ?></li>
	                                                        <li><i class="far fa-eye"></i>Lượt xem</li>
	                                                    </ul>
	                                                </div>
	                                                <p class="desc"><?php echo strip_tags($val['description']) ?></p>
	                                            </div>
	                                            <div class="clearfix"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                    		<?php } ?>
	                    		<div class="clearfix"></div>
								<?php echo (isset($PaginationList)) ? $PaginationList : ''; ?>
							<?php }else{ echo '<div class="mt10">'.$this->lang->line('no_data_table').'</div>';} ?>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('homepage/frontend/common/aside') ?>
		</div>
	</div>
</main>
