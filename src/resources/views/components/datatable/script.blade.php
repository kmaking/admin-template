{!! script('plugins/datatables/JSZip-2.5.0/jszip.min.js') !!}
{!! script('plugins/datatables/pdfmake-0.1.36/pdfmake.min.js') !!}
{!! script('plugins/datatables/pdfmake-0.1.36/vfs_fonts.js') !!}
{!! script('plugins/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js') !!}
{!! script('plugins/datatables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js') !!}
{!! script('plugins/datatables/AutoFill-2.3.0/js/dataTables.autoFill.min.js') !!}
{!! script('plugins/datatables/AutoFill-2.3.0/js/autoFill.bootstrap4.min.js') !!}
{!! script('plugins/datatables/Buttons-1.5.2/js/dataTables.buttons.min.js') !!}
{!! script('plugins/datatables/Buttons-1.5.2/js/buttons.bootstrap4.min.js') !!}
{!! script('plugins/datatables/Buttons-1.5.2/js/buttons.colVis.min.js') !!}
{!! script('plugins/datatables/Buttons-1.5.2/js/buttons.flash.min.js') !!}
{!! script('plugins/datatables/Buttons-1.5.2/js/buttons.html5.min.js') !!}
{!! script('plugins/datatables/Buttons-1.5.2/js/buttons.print.min.js') !!}
{!! script('plugins/datatables/ColReorder-1.5.0/js/dataTables.colReorder.min.js') !!}
{!! script('plugins/datatables/FixedColumns-3.2.5/js/dataTables.fixedColumns.min.js') !!}
{!! script('plugins/datatables/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js') !!}
{!! script('plugins/datatables/KeyTable-2.4.0/js/dataTables.keyTable.min.js') !!}
{!! script('plugins/datatables/Responsive-2.2.2/js/dataTables.responsive.min.js') !!}
{!! script('plugins/datatables/Responsive-2.2.2/js/responsive.bootstrap4.min.js') !!}
{!! script('plugins/datatables/RowGroup-1.0.3/js/dataTables.rowGroup.min.js') !!}
{!! script('plugins/datatables/RowReorder-1.2.4/js/dataTables.rowReorder.min.js') !!}
{!! script('plugins/datatables/Scroller-1.5.0/js/dataTables.scroller.min.js') !!}
{!! script('plugins/datatables/Select-1.2.6/js/dataTables.select.min.js') !!}

<script>
	$('document').ready(function(){
		$('[data-table]').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "datatable-nosort",
				orderable: false,
			}, { 
				responsivePriority: 1, 
				targets: -1 
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search..."
			},
		});
		$('[data-table-export]').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			colReorder: true,
			columnDefs: [{
				targets: "datatable-nosort",
				orderable: false,
			}, { 
				responsivePriority: 1, 
				targets: -1 
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search..."
			},
			dom: 'Bfrtpl',
			buttons: [
			{
				extend: 'copy',
				text: '<i class="fa fa-copy"></i> Copy',
				footer: true,
				exportOptions: {
					columns: "thead th:not(.no-export)"
				},
				className: 'btn-sm btn-outline-primary'
			}, {
				extend: 'print',
				text: '<i class="fa fa-print"></i> Print',
				footer: true,
				exportOptions: {
					columns: "thead th:not(.no-export)"
				},
				className: 'btn-sm btn-outline-primary'
			}, {
				extend: 'pdf',
				text: '<i class="fa fa-file-pdf-o"></i> PDF',
				footer: true,
				exportOptions: {
					columns: "thead th:not(.no-export)"
				},
				className: 'btn-sm btn-outline-primary'
			}, {
				extend: 'csv',
				text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> CSV',
				footer: true,
				exportOptions: {
					columns: "thead th:not(.no-export)"
				},
				className: 'btn-sm btn-outline-primary rounded-right'
			}, {
				extend: 'colvis',
				text: '<span class="fa fa-columns"></span> Select Columns',
				footer: true,
				className: 'btn-sm btn-outline-primary rounded-left ml-3'
			}
			]
		});
		var table = $('.select-row').DataTable();
		$('.select-row tbody').on('click', 'tr', function () {
			if ($(this).hasClass('selected')) {
				$(this).removeClass('selected');
			}
			else {
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
			}
		});
		var multipletable = $('.multiple-select-row').DataTable();
		$('.multiple-select-row tbody').on('click', 'tr', function () {
			$(this).toggleClass('selected');
		});
	});
</script>