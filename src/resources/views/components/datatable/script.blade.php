{{-- <script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/responsive.bootstrap4.js') }}"></script>

<script src="{{ asset('plugins/datatables/media/js/button/dataTables.buttons.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/button/buttons.bootstrap4.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/button/buttons.print.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/button/buttons.html5.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/button/buttons.flash.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/button/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/button/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/Buttons-1.5.2/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/ColReorder-1.5.0/js/dataTables.colReorder.min.js') }}"></script> --}}

<script type="text/javascript" src="{{ asset('plugins/datatables/JSZip-2.5.0/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/AutoFill-2.3.0/js/dataTables.autoFill.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/AutoFill-2.3.0/js/autoFill.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.2/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.2/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.2/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.2/js/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.2/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.2/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/ColReorder-1.5.0/js/dataTables.colReorder.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/FixedColumns-3.2.5/js/dataTables.fixedColumns.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/KeyTable-2.4.0/js/dataTables.keyTable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Responsive-2.2.2/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Responsive-2.2.2/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/RowGroup-1.0.3/js/dataTables.rowGroup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/RowReorder-1.2.4/js/dataTables.rowReorder.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Scroller-1.5.0/js/dataTables.scroller.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datatables/Select-1.2.6/js/dataTables.select.min.js') }}"></script>

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