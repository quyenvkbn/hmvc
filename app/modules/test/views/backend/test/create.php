<section class="content-header">
	<h1>Thêm combo mới</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
		<li><a href="<?php echo site_url('test/backend/test/view');?>">test</a></li>
		<li class="active"><a href="<?php echo site_url('test/backend/test/create');?>">Thêm test mới</a></li>
	</ol>
</section>
<section class="content">
	<div class="row">
		Test Upload image
		<input type="text" name="image1" value="" class="form-control" placeholder="Ảnh đại diện" onclick="openCurrentKCFinder(this, 'txtImages1')">
		<div class="col-md-12">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-info" data-toggle="tab">Thông tin cơ bản</a></li>
					<li><a href="#tab-advanced" data-toggle="tab">Nâng cao</a></li>
				</ul>
				<form class="form-horizontal" method="post" action="">
					<div class="tab-content">
						<div class="box-body">
							<?php $error = validation_errors(); echo !empty($error)?'<div class="callout callout-danger">'.$error.'</div>':'';?>
						</div><!-- /.box-body -->
						<div class="tab-pane active" id="tab-info">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Tiêu đề</label>
									<div class="col-sm-4">
										<?php echo form_input('title', set_value('title'), 'class="form-control" placeholder="Tên test"');?>
									</div>
								</div>
							</div><!-- /.box-body -->
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab-advanced">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Xuất bản</label>
									<div class="col-sm-2">
										<?php echo form_dropdown('publish', $this->configbie->data('publish'), set_value('publish', 1), 'class="form-control select2" style="width: 100%;"');?>
									</div>
								</div>
							</div><!-- /.box-body -->
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Làm lại</button>
						<button type="submit" name="create" value="action" class="btn btn-info pull-right">Thêm mới</button>
					</div><!-- /.box-footer -->
				</form>
			</div><!-- nav-tabs-custom -->
		</div><!-- /.col -->
	</div> <!-- /.row -->
</section><!-- /.content -->
<script type="text/javascript">
	$(document).on('click', '.img-thumbnail', function(){
		openKCFinderAlbum($(this));
	});
	
	function openCurrentKCFinder(field, destination) {
		window.KCFinder = {
			callBack: function(url) {
				field.value = url;
				window.KCFinder = null;
				if (destination != '') {
					$('#'+destination).attr('src', url);
					if (url != '') {
						$('#'+destination).parent().siblings('.modal').find('.form-control.image').val(url);
						$('#'+destination).parent().siblings('.modal').find('.fc-upload-thumb img').attr('src', url);
						// $('#'+destination).parent().parent().removeClass('fc-thumb-new').next().removeClass('hidden');
					}
				}
			}
		};
		window.open('/plugins/kcfinder-master/browse.php?type=images&dir=images/public', 'kcfinder_image',
			'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
			'resizable=1, scrollbars=0, width=800, height=600'
		);
	}
</script>