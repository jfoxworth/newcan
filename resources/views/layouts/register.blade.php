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


					@include('navbar2')

				</div>

			</div>

		</header>

		@include('register.mainRegister')

		@include('footer')

	</div><!-- .wrapper -->

	@include('jscript')


</body>
</html>
