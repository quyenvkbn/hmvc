<section class="content-header">
	<h1>Cập nhật liên kết website</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
		<li><a href="<?php echo site_url('address/backend/address/view');?>">Liên kết website</a></li>
		<li class="active"><a href="<?php echo site_url('address/backend/address/update/'.$Detailaddress['id']);?>">Cập nhật liên kết website</a></li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-info" data-toggle="tab">Thông tin cơ bản</a></li>
				</ul>
				<form class="form-horizontal" method="post" action="">
					<div class="tab-content">
						<div class="box-body">
							<?php $error = validation_errors(); echo !empty($error)?'<div class="callout callout-danger">'.$error.'</div>':'';?>
						</div><!-- /.box-body -->
						<div class="tab-pane active" id="tab-info">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Tên phòng</label>
									<div class="col-sm-4">
										<?php echo form_input('title', set_value('title', $Detailaddress['title']), 'class="form-control" placeholder="Tên phòng"');?>
									</div>
									<label class="col-sm-2 control-label">Xuất bản</label>
									<div class="col-sm-4">
										<?php echo form_dropdown('publish', $this->configbie->data('publish'), set_value('publish',$Detailaddress['publish']), 'class="form-control select2" style="width: 100%;"');?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kích thước files</label>
									<div class="col-sm-4">
										<?php echo form_input('size', set_value('size', $Detailaddress['size']), 'class="form-control" placeholder="Kích thước files"');?>
									</div>
									<label class="col-sm-2 control-label">Loại Files</label>
									<div class="col-sm-4">
										<?php echo form_input('type', set_value('type', $Detailaddress['type']), 'class="form-control" placeholder="Loại Files"'); ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Files đính kèm</label>
									<div class="col-sm-9">
										<?php echo form_input('attachs', set_value('attachs', $Detailaddress['attachs']), 'class="form-control" placeholder="Files đính kèm" onclick="openKCFinder(this, files)"');?>
									</div>
								</div>
							</div><!-- /.box-body -->
						</div><!-- /.tab-pane -->

					</div><!-- /.tab-content -->
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Làm lại</button>
						<button type="submit" name="update" value="action" class="btn btn-info pull-right">Cập nhật</button>
					</div><!-- /.box-footer -->
				</form>
			</div><!-- nav-tabs-custom -->
		</div><!-- /.col -->
	</div> <!-- /.row -->
</section><!-- /.content -->