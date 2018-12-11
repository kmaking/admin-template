@switch($name)
    @case('sweetalert2')
		{!! script('plugins/sweetalert2/sweetalert2.all.js') !!}
		{!! script('plugins/sweetalert2/sweet-alert.init.js') !!}
		@include('sweetalert::alert')
        @break
	@case('switch')
		{!! script('plugins/switchery/dist/switchery.js') !!}
		<script type="text/javascript">
			var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
			$('.switch-btn').each(function() {
				new Switchery($(this)[0], $(this).data());
			});
		</script>
        @break
	@case('tags')
		{!! script('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') !!}
        @break
	@case('touchspin')
		{!! script('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') !!}
        @break
@endswitch
