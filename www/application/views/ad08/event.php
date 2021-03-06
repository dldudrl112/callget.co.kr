<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

	<title>CALLGET</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/event.css" rel="stylesheet" type="text/css">

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5ZZQZZ2');
	</script>
	<!-- End Google Tag Manager -->


</head>

<body>
	<!-- Preloader -->
	<!-- <div id="preloader">
		<div id="status"></div>
	</div> -->
	<!-- Preloader_END -->

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZZQZZ2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Navigation -->
	<header>
		<nav class="navbar navbar-global navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="logo">
					<a href="/ad08">
						<img src="/assets/images/logo.png" />
						<!-- <p>??????????????? ?????? ???????????? ????????????</p> -->
					</a>
				</div>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/ad08">??????</a>
						</li>
						<li>
							<a href="/ad08/about">??????TV????</a>
						</li>
						<li>
							<a href="/ad08/faq">????????????</a>
						</li>
						<li>
							<a href="/ad08/event">?????????</a>
						</li>
						<!-- <li>
							<a href="/ad08/news/1">??????</a>
						</li> -->
						<li>
							<a href="/ad08/contactus">????????????</a>
						</li>
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->



	<!-- Event_1_END -->
	<section id="event_1">
		<div class="container">
			<div class="row">
				<p class="event_title">?????? ?????? ?????????</p>
				<? for ($i = 0; $i < count($list); $i++) {
					$j = 0; ?>
					<div class="event pointer" data-idx="<?= $list[$i]->event_idx ?>">
						<? foreach ($list[$i] as $key => $value) {
							if (!strpos($key, 'idx')) {
								if (strpos($key, 'image')) { ?>
									<div class="banner"><a href="<?= $list[$i]->event_link  ?>"><img src="<?= SURL ?>/assets/uploads/<?= $value ?>"></a></div>
								<? } else { ?>
									<!-- <div class=" "><?= $value ?></div> -->
						<? }
							}
							$j++;
						} ?>

					</div>
				<? } ?>

			</div>
		</div>
	</section>

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP?????? ??????" alt="TOP?????? ??????">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
</body>

</html>