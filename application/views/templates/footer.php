<section id="footer">
	<footer class="blue darken-3">
		<div class="footer-copyright center-align">
			<div class="container white-text">
				© 2020 Copyright | TK INSAN KAMIL
			</div>
		</div>
	</footer>
</section>


<script src="<?= base_url('assets/') ?>js/materialize.min.js"></script>

<!-- JAVASCRIPT -->
<script>
	let zoomPict = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(zoomPict, {
		inDuration: 500,
		outDuration: 700
	});

	// NAVBAR MOBILE
	let mobile = document.querySelectorAll('.sidenav');
	M.Sidenav.init(mobile);

	// SLIDER
	let sliders = document.querySelectorAll('.slider');
	M.Slider.init(sliders, {
		indicators: true,
		height: 500,
		duration: 600,
		interval: 3000
	});

	// CONTACT US
	let contact = document.querySelectorAll('.fixed-action-btn');
	M.FloatingActionButton.init(contact, {
		direction: 'top'
	});
</script>
</body>

</html>
