<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ isset($title) ? $title .' | '. config('app.name', 'Laravel') :  config('app.name', 'Laravel')}}</title>
		<link rel="icon" href="{{asset('backend/images/logo.png')}}">
		@include('_partials.admin.stylesheet')
		<style type="text/css" media="print">
			.noprint{
				display: none;
		}
		</style>
		<script>
			const Base_url = '/admin/';
		</script>
	</head>
	<body class="navbar-top">
		@if (Auth::guard('admin')->check())
		<!-- Main navbar -->
		@include('_partials.admin.main_navbar')
		<!-- /main navbar -->
		@endif
		<!-- Page content -->
		<div class="page-content ">
			@if (Auth::guard('admin')->check())
			<!-- Main sidebar -->
			<div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md noprint">
				<!-- Sidebar mobile toggler -->
				@include('_partials.admin.sidebar_mobile_content')
				<!-- /sidebar mobile toggler -->
				<!-- Sidebar content -->
				<div class="sidebar-content noprint">
					<!-- User menu -->
					@include('_partials.admin.user_menu')
					<!-- /user menu -->
					<!-- Main navigation -->
					@include('_partials.admin.main_navigation')
					<!-- /main navigation -->
				</div>
				<!-- /sidebar content -->
			</div>
			<!-- /main sidebar -->
			@endif
			<!-- Main content -->
			<div class="content-wrapper">
				@auth()
				<!-- Page header -->
				@section('page_header')
				@show
				<!-- /page header -->
				@endauth
				<!-- Content area -->
				<div class="content">
					@section('content')
					@show
				</div>
				<!-- /content area -->
				<!-- Footer -->
				@include('_partials.admin.footer')
				<!-- /footer -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
		@include('_partials.admin.scripts')
	</body>
</html>
