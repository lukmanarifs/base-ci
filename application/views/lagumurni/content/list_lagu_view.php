
<script>


<?php 
$counter2 = 1;

foreach($rows as $r2) :

echo $r2->id_kontes;
?>

$(document).ready(function() {
		
		    $("<?php echo '#jquery_jplayer_'.$counter2?>").jPlayer({
		        ready: function(event) {
		            $(this).jPlayer("setMedia", {
		                title: "<?php echo $r2->judul_lagu;?>",
		                mp3: "<?php echo base_url().$r2->path_musik;?>"
		            });
		        },
		        swfPath: "<?php echo base_url();?>uploads/",
		        supplied: "mp3",
		        cssSelectorAncestor: "<?php echo '#jp_container_'.$counter2 ?>"
		    });
		});
			
<?php 
$counter2 = $counter2 + 1;
endforeach;?>
</script>
		  
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="lagu_list">
		<thead> 
			<tr> 
				<th>ID Kontestan</th> 
				<th>Nama Kontestan</th> 
				<th>Lagu</th> 
				<th>Action</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			$count = 1;
			
			foreach($rows as $r) : ?>
           
            <tr>
            <td style="width: 10%"><?php echo $r->id_user; ?></td>
            <td><?php echo $r->nama_lengkap; ?></td>
            <td style="width: 1%;">
            <div id="<?php echo "jquery_jplayer_".$count?>" class="jp-jplayer"></div>
			  <div id="<?php echo "jp_container_".$count?>" class="jp-audio">
			    <div class="jp-type-single">
			      <div class="jp-gui jp-interface">
			        <ul class="jp-controls">
			          <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
			          <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
			          <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
			          <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
			          <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
			          <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
			        </ul>
			        <div class="jp-progress">
			          <div class="jp-seek-bar">
			            <div class="jp-play-bar"></div>
			          </div>
			        </div>
			        <div class="jp-volume-bar">
			          <div class="jp-volume-bar-value"></div>
			        </div>
			        <div class="jp-time-holder">
			          <div class="jp-current-time"></div>
			          <div class="jp-duration"></div>
			          <ul class="jp-toggles">
			            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
			            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
			          </ul>
			        </div>
			      </div>
			      <div class="jp-details">
			        <ul>
			          <li><span class="jp-title"></span></li>
			        </ul>
			      </div>
			      <div class="jp-no-solution">
			        <span>Update Required</span>
			        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
			      </div>
			    </div>
			  </div>
            <td align="center" style="width: 1%"><button type="button" class="btn btn-default btn-md" onclick="setWinner('<?php echo $r->idt_kontes?>')">
			  <span class="glyphicon glyphicon-star"></span> Winner
			</button>
			</td>
                        
            </td>
            <?php 
            $count = $count +1 ;
            
            endforeach;?>
		</tbody> 
</table>	
 <script type="text/javascript">
 
 	function setWinner($id){
 		var id = $id;
 		$.ajax({
		    url: "<?php echo base_url()?>member/set_winner",
		    type: "POST",
		    data: "id="+id,
		    success: function (response) {
		        alert("Winner have been decided.");
				location.reload();
		    }
		});
 	}
 
	$(document).ready(function() {
	    $('#contest_list').dataTable({
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
				{ "sWidth": "5%" }
			],
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
			length_sel.parent().parent().html('<button type="button" class="btn btn-default btn-sm" onclick=""><span class="glyphicon glyphicon-plus"></span> Create Contest</button>');
		});
		$("[rel=tooltip]").tooltip({ placement: "top"});
	} );
	
	
</script>