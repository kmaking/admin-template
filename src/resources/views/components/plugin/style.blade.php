@switch($name)
    @case('sweetalert2')
		{!! style('plugins/sweetalert2/sweetalert2.css') !!}
        @break
    @case('switch')
		{!! style('plugins/switchery/dist/switchery.css') !!}
        @break
    @case('tags')
		{!! style('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') !!}
        @break
    @case('touchspin')
		{!! style('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') !!}
        @break
@endswitch
