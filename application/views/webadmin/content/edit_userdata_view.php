<style>
fieldset {
	border: #cccccc solid 1px;
	padding: 10px;
	margin-bottom: 10px;
}
fieldset legend {
	padding: 5px 10px;
	color: #666;
	background: #FFF;
	border: #cccccc solid 1px;
}
.pembayaran span{
	font-size:14px;
	font-weight:bold;
}
</style>
<article class="module width_full">
	<?php
		$query = $this->webadmin_model->tm_user_select_by_id($id_user);
		$row = $query->row();
	?>
	<form action="<?=base_url()?>webadmin/update_user" method="post" id="form_user_edit">
		<header><h3>Edit User Data</h3></header>
			<div class="module_content">
				<input type="hidden" name="id_user" value="<?php echo $id_user?>">
				<fieldset>
					<table width="450" border="0" cellspacing="6">
						<tr>
							<td width="100">Name</td>
							<td width="250"><input type="text" name="nama_lengkap" style="width:100%;" value="<?=$row->nama_lengkap?>" /></td>
						</tr>
						<tr>
							<td>Birth date</td>
							<td><input type="text" name="tgl_lahir" class="date" style="width:40%;" value="<?=$row->tgl_lahir?>" /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" name="alamat_email" style="width:100%;" value="<?=$row->alamat_email?>" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="alamat" style="width:100%;" value="<?=$row->alamat?>" /></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" name="kota" style="width:100%;" value="<?=$row->kota?>" /></td>
						</tr>
						<tr>
							<td>Country</td>
							<td><input type="text" name="negara" style="width:100%;" value="<?=$row->negara?>" /></td>
						</tr>
						<tr>
						  <td>Phone</td>
						  <td><input type="text" name="no_hp" style="width:100%;" value="<?=$row->no_hp?>" /></td>
						</tr>
						  <td>Status</td>
						  <td>
							<select class="select" name="status" id="status" style="width:43%">
								<option value="0">Signup</option>
								<option value="1">Registered</option>
							</select>
						  </td>
						</tr>
					</table>
				</fieldset>	
			</div>
		<footer>
			<div class="submit_link">
				<input type="button" value="Save" class="alt_btn submit">
				<input type="reset" value="Reset">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->
<script>
//===================== Repopulate Data =========================//
var status = "<?=$row->user_status?>";
if(status != ''){
	$('#status').val(status);
	$('#status option:eq(0)').hide();
}
$(document).ready(function(){
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd',
		nextText : "",
		prevText : "",
		changeMonth : true,
		changeYear : true,
		yearRange: '1900',
	});
	
	$('.submit').click(function() {
		var form = $('#form_user_edit');
		var empty = false;
        var temp_field = null;
        var input = $('#form_user_edit').find('input[type=text],select').filter(function() {
            if(this.value === ""){
                var temp = $(this).attr('name');
                empty = true;
                if(temp_field == null){
                    temp_field = $(this);
                }
            }
        });
        if(empty) {
            temp_field.focus();
            alert('All input must be filled!');
            return false;
        }
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: form.attr('action'),
			data: form.serialize(),
			success: function(data,status) {
				if(data.status != 'error'){
					window.location = "<?=base_url()?>webadmin/users_list";
				}
				alert(data.msg);
			}
		})
			return false;
	})
});
</script>