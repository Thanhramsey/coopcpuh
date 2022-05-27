<?php echo form_open('admin/product/danhgia'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-cd"></i> Bình luận sản phẩm</h1>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
						<!-- /.box-header -->
						<div class="box-body">
							<?php if ($this->session->flashdata('success')) : ?>
								<div class="row">
									<div class="alert alert-success">
										<?php echo $this->session->flashdata('success'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									</div>
								</div>
							<?php endif; ?>
							<?php if ($this->session->flashdata('error')) : ?>
								<div class="row">
									<div class="alert alert-error">
										<?php echo $this->session->flashdata('error'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									</div>
								</div>
							<?php endif; ?>
							<div class="row" style='padding:0px; margin:0px;'>
								<!--ND-->
								<h3>Có tổng cộng <?php echo $total; ?> bình luận về sản phẩm</h3>
								<div class="table-responsive">
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<th class="text-center" style="width:20px; display:none">ID</th>
												<th>Người bình luận</th>
												<th>Số Đt</th>
												<th>Thời gian bình luận</th>
												<th>Sao sản phẩm</th>
												<th>Nội dung</th>
												<?php
													$user_role = $this->session->userdata('sessionadmin');
													if ($user_role['role'] == 1) {
														echo '<th class="text-center">Thao tác</th>';
													}
												?>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($list as $row) : ?>
												<tr>
													<td style="width:20px; display:none" class="text-center"><?php echo $row['id'] ?></td>
													<td class="text-center"><?php echo $row['user_name'] ?></td>
													<td class="text-center"><?php echo $row['sdt'] ?></td>
													<td class="text-center"><?php echo $row['comment_time'] ?></td>
													<td class="text-center"><?php echo $row['star'] ?></td>
													<td class="text-start"><?php echo $row['content'] ?></td>
													<?php $user_role = $this->session->userdata('sessionadmin'); if ($user_role['role'] == 1) : ?>
													<td class="text-center">
														<a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>admin/product/deleteComment/<?php echo $row['id'] ?>" onclick="return confirm('Xác nhận xóa sản phẩm này ?')" role="button">
															<span class="glyphicon glyphicon-trash"></span> Xóa
														</a>
													</td>
													<?php endif; ?>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<ul class="pagination">
											<?php echo $strphantrang ?>
										</ul>
									</div>
								</div>
								<!-- /.ND -->
							</div>
						</div><!-- ./box-body -->
					</div><!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
	</section>
	<!-- /.content -->
</div><!-- /.content-wrapper -->