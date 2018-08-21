<script type="text/javascript">
	
	$("input[id='{{ $slot }}']").TouchSpin({
		min: {{ $min ?? "0" }},
		max: {{ $max ?? "100" }},
		step: {{ $step ?? "1" }},
		decimals: {{ $decimals ?? "0" }},
		boostat: 5,
		maxboostedstep: 10,
		prefix: "{{ $prefix ?? "" }}",
		postfix: "{{ $postfix ?? "" }}",
		buttonup_class: "btn btn-secondary bg-secondary text-white rounded-0",
		buttondown_class: "btn btn-secondary bg-secondary text-white rounded-0",
		prefix_extraclass: "border-left border-whit bg-primary",
		prefix_extraclass: "border-right border-whit bg-primary",
		@if ($verticle ?? false == true)
			verticalbuttons: true,
			verticalupclass: "fa fa-chevron-up",
			verticaldownclass: "fa fa-chevron-down",
		@endif
	});

</script>