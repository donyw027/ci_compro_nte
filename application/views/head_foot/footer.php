<!-- Footer Area -->
<footer id="footer" class="footer ">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-footer">
						<img src="<?= base_url('assets/img/logo4.png') ?>" alt="" width="60%"><br><br>
						<!-- <img src="<?= base_url('assets/img/apkb.png') ?>" alt="" width="60%"><br><br>
						<img src="<?= base_url('assets/img/SVLK Logo.png') ?>" alt="" width="60%"> -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-6">
					<div class="single-footer">
						<h2><?= $this->lang->line('f_about_title') ?></h2>
						<p>Perusahaan trading ekspor yang berbasis di Indonesia, yang bergerak dalam perdagangan komoditas unggulan Indonesia ke pasar internasional. <br><br>
							EMPOWERING THE WORLD WITH THE BEST OF NUSANTARA</p>
						<!-- Social -->
						<ul class="social">
							<li><a href=""><i class="icofont-facebook"></i></a></li>
							<!-- <li><a href=""><i class="icofont-google-plus"></i></a></li> -->
							<!-- <li><a href=""><i class="icofont-twitter"></i></a></li> -->
							<!-- <li><a href="mailto:info@akt-id.com"><i class="icofont-email"></i></a></li> -->
							<!-- <li><a target="_blank" href="https://id.pinterest.com/pt_akt_indonesia/"><i class="icofont-pinterest"></i></a></li> -->
							<li><a target="_blank" href="https://www.linkedin.com/company/aktindonesia/"><i class="icofont-linkedin"></i></a></li>
						</ul>
						<!-- End Social -->
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-6">
					<div class="single-footer">
						<h2>Kontak Kami</h2>
						<!-- <p><?= $this->lang->line('open_hours_desc') ?></p><br> -->

						<p class="mb-0">Perumahan Grianan Agung Blok C5-07<br>Randuagung, Singosari, Kab. Malang 65153</p><br>
						<p>Email : info@tba.com</p>
						<p>WhatsApp : +62 851-6355-1120</p>


					</div>
				</div>

			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<div class="copyright-content">
						<p>© Copyright 2025 | Nusantara Tridaya Eksporindo </p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- jquery Min JS -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<!-- jquery Migrate JS -->
<script src="<?= base_url('assets/js/jquery-migrate-3.0.0.js') ?>"></script>
<!-- jquery Ui JS -->
<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
<!-- Easing JS -->
<script src="<?= base_url('assets/js/easing.js') ?>"></script>
<!-- Color JS -->
<script src="<?= base_url('assets/js/colors.js') ?>"></script>
<!-- Popper JS -->
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<!-- Bootstrap Datepicker JS -->
<script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
<!-- Jquery Nav JS -->
<script src="<?= base_url('assets/js/jquery.nav.js') ?>"></script>
<!-- Slicknav JS -->
<script src="<?= base_url('assets/js/slicknav.min.js') ?>"></script>
<!-- ScrollUp JS -->
<script src="<?= base_url('assets/js/jquery.scrollUp.min.js') ?>"></script>
<!-- Niceselect JS -->
<script src="<?= base_url('assets/js/niceselect.js') ?>"></script>
<!-- Tilt Jquery JS -->
<script src="<?= base_url('assets/js/tilt.jquery.min.js') ?>"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url('assets/js/owl-carousel.js') ?>"></script>
<!-- counterup JS -->
<script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
<!-- Steller JS -->
<script src="<?= base_url('assets/js/steller.js') ?>"></script>
<!-- Wow JS -->
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<!-- Magnific Popup JS -->
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- Main JS -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<script>
	window.addEventListener("load", function() {
		setTimeout(function() {
			const preloader = document.getElementById("preloader-logo");
			preloader.style.opacity = "0";
			preloader.style.visibility = "hidden";
			preloader.style.transition = "all 0.4s ease";
		}, 500); // delay 500ms
	});
</script>



<a href="https://wa.me/6285163551120" class="wa-float-btn" target="_blank" aria-label="Chat WhatsApp">
	<i class="fab fa-whatsapp"></i>
</a>


</body>

</html>


<script>
	const counters = document.querySelectorAll('.capacity-number');
	counters.forEach(counter => {
		counter.innerText = '0';
		const updateCounter = () => {
			const target = +counter.getAttribute('data-target');
			const count = +counter.innerText.replace(/,/g, '');
			const increment = target / 100;

			if (count < target) {
				counter.innerText = Math.ceil(count + increment).toLocaleString();
				setTimeout(updateCounter, 10);
			} else {
				counter.innerText = target.toLocaleString();
			}
		};
		updateCounter();
	});
</script>

<script>
	function formatNumberInput(id) {
		document.getElementById(id).addEventListener('input', function(e) {
			let value = this.value.replace(/\D/g, '');
			if (value === '') return this.value = '';
			this.value = new Intl.NumberFormat('id-ID').format(value);
		});
	}

	formatNumberInput('salary_ekspetasi');
	formatNumberInput('last_salary');
</script>