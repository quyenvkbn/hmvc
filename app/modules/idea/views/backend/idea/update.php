<section class="content-header">
	<h1>Cập nhật</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
		<li><a href="<?php echo site_url('idea/backend/idea/view');?>">Cảm nhận</a></li>
		<li class="active"><a href="<?php echo site_url('idea/backend/idea/update/'.$Detailaddress['id']);?>">Cập nhật bản gh</a></li>
	</ol>
</section>
<section class="content">
	<form class="form-horizontal" method="post" action="">
		<div class="row">
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-info" data-toggle="tab">Thông tin cơ bản</a></li>
					</ul>
					<div class="tab-content">
						<div class="box-body">
							<?php $error = validation_errors(); echo !empty($error)?'<div class="callout callout-danger">'.$error.'</div>':'';?>
						</div><!-- /.box-body -->
						<div class="tab-pane active" id="tab-info">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Tiêu đề</label>
									<div class="col-sm-10">
										<?php echo form_input('title', set_value('title', $Detailaddress['title']), 'class="form-control" placeholder="Tiêu đề"');?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Địa chỉ</label>
									<div class="col-sm-10">
										<?php echo form_input('address', set_value('address', $Detailaddress['address']), 'class="form-control" placeholder="Địa chỉ"');?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Nội dung</label>
									<div class="col-sm-9">
										<?php echo form_textarea('content', set_value('content', $Detailaddress['content']), 'class="form-control" placeholder="Nội dung" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"');?>
									</div>
								</div>
							</div><!-- /.box-body -->
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Làm lại</button>
						<button type="submit" name="update" value="action" class="btn btn-info pull-right">Cập nhật</button>
					</div><!-- /.box-footer -->
				</div><!-- nav-tabs-custom -->
			</div><!-- /.col -->
			<div class="col-md-3">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-info" data-toggle="tab">Nâng cao</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab-seo">
							<div class="form-group">
								<label class="col-sm-12 control-label tp-text-left">Ảnh đại diện</label>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="avatar" style="margin-bottom: 10px;cursor: pointer;"><img src="<?php echo (!empty($Detailaddress['images']))? $Detailaddress['images']:'templates/not-found.png'; ?>" class="img-thumbnail" alt="" style="width: 100%;border-radius: 0;" /></div>
									<?php echo form_input('images', set_value('images', $Detailaddress['images']), 'class="form-control"  placeholder="Ảnh đại diện" onclick="openKCFinder(this)" ');?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 control-label tp-text-left">Xuất bản</label>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<?php echo form_dropdown('publish', $this->configbie->data('publish'), set_value('publish', $Detailaddress['publish']), 'class="form-control" style="width: 100%;"');?>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div><!-- /.tab-pane -->
				</div><!-- /.tab-content -->
			</div><!-- nav-tabs-custom -->
		</div> <!-- /.row -->
	</form>
</section><!-- /.content -->
<script type="text/javascript">
	$(window).load(function(){
		$(document).on('click', '.img-thumbnail', function(){
			openKCFinderAlbum($(this));
		});
	});
</script>