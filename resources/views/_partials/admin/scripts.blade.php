<!-- Core JS files -->
	<script src="{{ asset('asset/global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/pages/layout_fixed_sidebar_custom.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/ui/perfect_scrollbar.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/forms/validation/validate.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/notifications/pnotify.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/notifications/sweetalert.min.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('js/parsley.js') }}"></script>

    <!-- Theme JS files -->
    <script src="{{ asset('asset/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{ asset('asset/assets/js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('asset/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>


<script src="{{ asset('asset/global_assets/js/demo_pages/dashboard.js')}}"></script>
<!-- /theme JS files -->

	<script>
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
	</script>
	<!-- /core JS files -->

	@stack('admin.scripts')
