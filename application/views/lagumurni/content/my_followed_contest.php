<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="contest_list">
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Contest</th> 
				<th>Description</th>
				<th>Gift</th> 
				<th>Creator</th> 
				<th>Action</th> 
			</tr> 
		</thead> 
		<tbody> 
			
		</tbody> 
</table>	

<script type="text/javascript">
	$(document).ready(function() {
	    $('#contest_list').dataTable({
			"fnCreatedRow": function( nRow, aData, iDataIndex ) {
				var first_td = $('td:eq(0)', nRow).text();
				var first_td = first_td.split('|');
				var paging = first_td[0];
				var id_kontes = first_td[1];
				var contest = $('td:eq(1)', nRow).text();
				var description = $('td:eq(2)', nRow).text();
				var gift = $('td:eq(3)', nRow).text();
				
				var add_data = $('td:eq(5)', nRow).text();
				var add_data = add_data.split('|');
				var id_creator = add_data[0];
				var genre = add_data[1];
				var follower = add_data[2];
				var start_date = add_data[3];
				var finish_date = add_data[4];
				
				var contest_name = "<span style='cursor:pointer;' title='Contest title'>"+contest+"</span>";
				var gift_formatted = "<span class='auto_number_format_span'>"+gift+"</span>";
				var description_all = "</br><span style='cursor:pointer;font-size:70%' title='"+follower+" user follow this contest' class='sm glyphicon glyphicon-heart'>"+follower+"</span></br><span title='Genre of this contest' style='cursor:pointer;font-size:70%'>"+genre+"</span></br><span title='Contest period' style='cursor:pointer;font-size:70%'>"+start_date+" - "+finish_date+"</span>";
				
				
				var string_html = "<input type='hidden' value='"+id_kontes+"' ><span onclick=\"upload('"+id_kontes+"')\" class='glyphicon glyphicon-log-in' style='cursor:pointer;' rel='tooltip' title='Edit for this contest.'></span>";
				
				$('td:eq(0)', nRow).html(paging);
				$('td:eq(1)', nRow).html(contest_name+description_all);
				$('td:eq(3)', nRow).html(gift_formatted);
				$('td:eq(5)', nRow).html(string_html);
				$('td:eq(0),td:eq(5)', nRow).css('text-align','center');
				$('td:eq(3)', nRow).css('text-align','right');
				$('td:eq(3)', nRow).find('.auto_number_format_span').autoNumeric("init");
			},
			"sPaginationType": "bs_full",	
			"aoColumns": [
				{ "sWidth": "2%" },
				{ "sWidth": "15%" },
				{ "sWidth": "30%" },
				{ "sWidth": "10%" },
				{ "sWidth": "10%" },
				{ "sWidth": "5%" }
			],
			"bAutoWidth": false, // Disable the auto width calculation 
			"iDisplayLength": 5,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?=base_url()?>member/ssp_followed_contest_list/<?=$id_user?>"
		});
		$('#contest_list').each(function(){
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
	
	function upload(id_kontes){
		var oTable = $('#contest_list').dataTable();
		var nNodes = oTable.fnGetNodes();
		for (var i=0; i < nNodes.length; i++) {
			var id_kontes_hidden = $('td:eq(5)', nNodes[i]).children().val();
			if(id_kontes == id_kontes_hidden){
				$('td:eq(5)', nNodes[i]).html('<form id="upload_form"><input type="hidden" name="id_kontes" value="'+id_kontes+'"><div class="input-group"><input class="btn-sm btn-primary" type="button" value="Reupload MP3" onclick="$(this).parent().find(\'input[type=file]\').click();"/> <span class="input-group-btn"><button type="button" class="btn-sm btn-info upload_mp3" data-id="'+id_kontes+'" onclick="upload_mp3()"><span class="glyphicon glyphicon-ok"></span></button></span> <input type="file" style="visibility:hidden; width: 1px;" name="photo_path" id="photo_path" onchange="validate_file(this)" /></div></form>');
			}
			else{
				$('td:eq(5)', nNodes[i]).html("<input type='hidden' value='"+id_kontes+"' ><span onclick=\"upload('"+id_kontes+"')\" class='glyphicon glyphicon-log-in' style='cursor:pointer;' rel='tooltip' title='Follow this contest.'></span>");
			}
		}
	}
	function validate_file(obj){
		var file_name = $(obj).val().replace('C:\\fakepath\\', '');
		var file_name_attr = file_name.split('.');
		file_name_attr[2] = obj.files[0].size/1024;
		
		if(file_name_attr[1] != 'mp3' || file_name_attr[2] > 5000){
			$(obj).wrap('<form>').closest('form').get(0).reset();
			$(obj).unwrap();
			alert('File must MP3 and maximum file size under 5 MB!');	
		}
	}
	
	function upload_mp3(){
		// var form = $("#upload_form");
		// formdata = form.serialize();
		// $.ajaxFileUpload({
			// type: 'POST',
			// fileElementId :'photo_path',
			// dataType: 'json',
			// url: '<?=base_url()?>member/edit_follow_contest',
			// data: {formdata: formdata},
			// success: function(data,status) {
				// if(data.status != 'error'){
					// window.location.reload();
				// }
				// alert(data.msg);
			// }
		// })
			// return false;
			alert('Reupload under construction');
	}
</script>