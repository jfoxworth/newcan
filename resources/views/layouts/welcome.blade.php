<!DOCTYPE html>
<html lang="en">

@include('head')

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						NewCAN
					</div><!-- #logo end -->


					@include('navbar')

				</div>

			</div>

		</header>

		@include('landing.splash')

		@include('landing.whoweare')

		@include('landing.jefferson')

		@include('landing.coreIssues')

		@include('landing.overview')

		@include('landing.HowItWorks')

		@include('landing.userBreak')

		@include('footer')

	</div><!-- .wrapper -->

	@include('jscript')


</body>
</html>
