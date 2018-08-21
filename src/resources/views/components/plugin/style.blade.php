@switch($name)
    @case('sweetalert2')
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweetalert2/sweetalert2.css') }}">
        @break
    @case('switch')
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/switchery/dist/switchery.css') }}">
        @break
    @case('tags')
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
        @break
    @case('touchspin')
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}">
        @break
@endswitch
