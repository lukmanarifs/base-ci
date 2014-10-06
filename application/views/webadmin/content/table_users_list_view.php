<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="table_user_list">
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Name</th> 
				<th>Birth</th> 
				<th>Address</th> 
				<th>Email</th> 
				<th>Phone</th> 
				<th>Status</th> 
				<th>Action</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php $numbering=1;foreach($rows as $r) : 
					if($r->user_status == '1'){
						$status ="Registerd";
					}
					else{
						$status ="Signup";
					}
			?>
			<tr>
				<td><?=$numbering?></td>
				<td><?=$r->nama_lengkap; ?></td>
				<td><?=$r->tgl_lahir; ?></td>
				<td><?=$r->alamat; ?></td>
				<td><?=$r->alamat_email; ?></td>
				<td><?=$r->no_hp; ?></td>
				<td><?=$status; ?></td>
				<td><a style="cursor:pointer;text-decoration: none;color: #000;" href="<?=base_url()?>webadmin/edit_userdata/<?=$r->id_user?>"><span class="glyphicon glyphicon-edit" title="Click to Edit" rel="tooltip"></span></a></td>
			</tr>
			 <?php $numbering++;endforeach; ?>
		</tbody> 
</table>	
 <script type="text/javascript">
	$(document).ready(function() {
	    $('#table_user_list').dataTable({
			"fnCreatedRow": function( nRow, aData, iDataIndex ) {
				$('td:eq(0),td:eq(2),td:eq(6),td:eq(7)', nRow).css('text-align','center');
			},
			"sPaginationType": "bs_full",	
			"aoColumns": [
				{ "sWidth": "2%" },
				{ "sWidth": "15%" },
				{ "sWidth": "10%" },
				{ "sWidth": "15%" },
				{ "sWidth": "10%" },
				{ "sWidth": "5%" },
				{ "sWidth": "5%" },
				{ "sWidth": "5%" }
			],
		});
		$('#table_user_list').each(function(){
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