<section id="product-all" class="collection">
	<div class="banner-product">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="public/images/sp.png">
			</div>
		</div>
	</div>
	<div class="slider">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class="list-menu pull-left col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php $this->load->view('frontend/modules/category'); ?>
				</div>
				<?php $this->load->view('frontend/modules/product-sale'); ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
				<div class="container" style="color:#0f9ed8">
					<h3 style="margin-top:10px"><?php echo $row['fullname'] ?><i style="font-size:20px; margin-left:5px" class="glyphicon glyphicon-ok-circle"></i></h3>
				</div>
				<div class="container">
					<div class="flexslider">
						<div data-thumb="public/images/admin/<?php echo $row['img'] ?>">
							<div class="thumb-image"> <img style="width:30%; border-radius:6px" src="public/images/admin/<?php echo $row['img']; ?>" class="img-responsive"> </div>
						</div>
					</div>
				</div>
				<div class="container">
					<ul style="margin-bottom:15px" class="nav nav-pills mb-3 dn-detail" id="pills-tab" role="tablist">
						<li class="nav-item active ">
							<a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Thông tin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sản Phẩm</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Liên hệ</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane detail-dn active products-grid clearfix" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><span><?php echo $row['detail'] ?></span></div>
						<div class="tab-pane detail-dn products-grid clearfix" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

										<?php if (count($list) == 0) : ?>
											<p class="no-products"> Doanh nghiệp hiện chưa có sản phẩm nào !</p>
										<?php else : ?>
											<?php foreach ($list as $sp) : ?>
												<div class="col-md-4 col-lg-4 col-xs-6 col-6 detail-box">
													<div class="product-lt">
														<div class="lt-product-group-image">
															<a id="zoomOut" href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
																<figure>
																	<img class="img-p" src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
																</figure>
															</a>

															<?php if ($sp['sale'] > 0) : ?>
																<div class="giam-percent">
																	<span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
																</div>
															<?php endif; ?>
														</div>

														<div class="lt-product-group-info">
															<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
																<h3><?php echo $sp['name'] ?></h3>
															</a>
															<div class="price-box">
																<?php if ($sp['sale'] > 0) : ?>

																	<p class="old-price">
																		<span class="price"><?php echo (number_format($sp['price'])); ?>₫</span>
																	</p>
																	<p class="special-price">
																		<span class="price"><?php echo (number_format($sp['price_sale'])); ?>₫</span>
																	</p>
																<?php else : ?>
																	<p class="old-price">
																		<span class="price" style="color: #fff"><?php echo (number_format($sp['price'])); ?>₫</span>
																	</p>
																	<p class="special-price">
																		<span class="price"><?php echo (number_format($sp['price'])); ?>₫</span>
																	</p>
																<?php endif; ?>
															</div>
															<div class="clear"></div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>

									<div class="text-center pull-right">
										<ul class="pagination">
											<?php echo $strphantrang; ?>
										</ul>
									</div>
								<?php endif; ?>
						</div>
						<div class="tab-pane detail-dn products-grid clearfix" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<table class="table table-hover">
							<thead>
							<tr>
								<th colspan="2" style="background:#0f9ed8; color:#fff">Thông tin liên hệ</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Tên cơ sở kinh doanh</td>
								<td><?php echo $row['fullname'] ?></td>
							</tr>
							<tr>
								<td>Số điện thoại</td>
								<td><?php echo $row['phone'] ?></td>
							</tr>
							<tr>
								<td>Địa chỉ</td>
								<td><?php echo $row['address'] ?></td>
							</tr>
							<tr>
								<td>email</td>
								<td><?php echo $row['email'] ?></td>
							</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
</section>
<script type="text/javascript">

</script>