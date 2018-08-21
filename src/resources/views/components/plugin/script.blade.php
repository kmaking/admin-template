@switch($name)
    @case('sweetalert2')
		<script src="{{ asset('plugins/sweetalert2/sweetalert2.all.js') }}"></script>
		<script src="{{ asset('plugins/sweetalert2/sweet-alert.init.js') }}"></script>
		@include('sweetalert::alert')
        @break
	@case('switch')
		<script src="{{ asset('plugins/switchery/dist/switchery.js') }}"></script>
		<script type="text/javascript">
			var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
			$('.switch-btn').each(function() {
				new Switchery($(this)[0], $(this).data());
			});
		</script>
        @break
	@case('tags')
		<script src="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
        @break
	@case('touchspin')
		<script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"></script>
        @break
@endswitch
