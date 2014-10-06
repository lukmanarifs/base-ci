<?php
	if($id_genre == ""){
		$id_genre = "all";
	}
	$query = $this->project_model->tt_kontes_select_by_id_genre($id_genre);
	foreach ($query->result() as $row){
?>
<div class="element col-sm-4  gall <?=$id_genre?>">
	<a class="plS" href="images/prettyPhotoImages/pic2.jpg" rel="prettyPhoto[gallery2]">
		<img class="img-responsive picsGall" src="images/prettyPhotoImages/thumb_pic2.jpg" alt="pic2 Gallery"/>
	</a>
	<div class="view project_descr center">
		<h3><a href="#"><?=$row->nama_kontes?></a></h3>
		<ul>
			<li><i class="fa fa-eye"></i>369</li>
			<li><a  class="heart" href="#"><i class="fa-heart-o"></i>86</a></li>
		</ul>
	</div>
</div>
<?php
}
?>