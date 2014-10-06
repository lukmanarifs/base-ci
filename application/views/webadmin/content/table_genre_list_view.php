<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="table_genre_list">
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Genre Code</th> 
				<th>Genre</th> 
				<th>Description</th> 
				<th>Action</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php $numbering=1;foreach($rows as $r) : ?>
			<tr>
				<td><?=$numbering?></td>
				<td><?=$r->id_genre; ?></td>
				<td><?=$r->genre; ?></td>
				<td><?=$r->deskripsi; ?></td>
				<td><a style="cursor:pointer;text-decoration: none;color: #000;" href="<?=base_url()?>webadmin/edit_genre/<?=$r->id_genre?>"><span class="glyphicon glyphicon-edit" title="Click to Edit" rel="tooltip"></span></a></td>
			</tr>
			 <?php $numbering++;endforeach; ?>
		</tbody> 
</table>	
 <script type="text/javascript">
	$(document).ready(function() {
	    $('#table_genre_list').dataTable({
			"fnCreatedRow": function( nRow, aData, iDataIndex ) {
				$('td:eq(0),td:eq(4)', nRow).css('text-align','center');
			},
			"sPaginationType": "bs_full",	
			"aoColumns": [
				{ "sWidth": "2%" },
				{ "sWidth": "8%" },
				{ "sWidth": "10%" },
				{ "sWidth": "15%" },
				{ "sWidth": "2%" }
			],
		});
		$('#table_genre_list').each(function(){
			var datatable = $(this);
			// SEARCH - Add the placeholder for Search and Turn this into in-line form control
			var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
			search_input.attr('placeholder', 'Search');
			search_input.addClass('form-control input-sm');
			// LENGTH - Inline-Form control
			var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
			length_sel.addClass('form-control input-sm');
		length_sel.parent().parent().html('');
		});
		$("[rel=tooltip]").tooltip({ placement: "top"});
	} );
</script>