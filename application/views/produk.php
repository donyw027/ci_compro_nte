<!-- <?php

		var_dump($loker);
		?> -->

<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Produk</h2>
					<ul class="bread-list">
						<li><a href="<?= site_url('home') ?>"><?= $this->lang->line('home') ?></a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active">produk</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
<br><br>
<section class="Feautes section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- <h2>Career </h2> -->
				<?= $this->session->flashdata('pesan'); ?>



				<div class="container my-5">
					<div class="row">
						<div class="col-md-4 mb-4 ">
							<div class="card h-100 shadow-sm">
								<div class="card-header">
									<h5 class="card-title">Produk 1<br>
									</h5>

								</div>
								<div class="card-body">
									<img src="<?= base_url('assets/img/11.jpg') ?>" alt="#"> <br>


									<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal">
										Detail Produk
									</button>

									<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal">
										Request Quotation
									</button>

									<a style="color:white;" href="<?= base_url('welcome/applyjob/')  ?>" type="button" class="btn btn-info mt-2">Kirim Inquiry</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4 ">
							<div class="card h-100 shadow-sm">
								<div class="card-header">
									<h5 class="card-title">Produk 2<br>
									</h5>

								</div>
								<div class="card-body">
									<img src="<?= base_url('assets/img/11.jpg') ?>" alt="#"> <br>


									<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal">
										Detail Produk
									</button>

									<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal">
										Request Quotation
									</button>

									<a style="color:white;" href="<?= base_url('welcome/applyjob/')  ?>" type="button" class="btn btn-info mt-2">Kirim Inquiry</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4 ">
							<div class="card h-100 shadow-sm">
								<div class="card-header">
									<h5 class="card-title">Produk 3<br>
									</h5>

								</div>
								<div class="card-body">
									<img src="<?= base_url('assets/img/11.jpg') ?>" alt="#"> <br>


									<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal">
										Detail Produk
									</button>

									<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal">
										Request Quotation
									</button>

									<a style="color:white;" href="<?= base_url('welcome/applyjob/')  ?>" type="button" class="btn btn-info mt-2">Kirim Inquiry</a>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>

	</div>
</section>