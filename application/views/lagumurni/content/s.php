<div id="contact">
    	<div class="line5">					
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>Got a Question? We&rsquo;re Here to Help!</h3>
					<p>what makes you hesitate to order the songs in lagumurni?</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12 forma">
				<div style="padding-bottom: 1%"></h3>Buat Kontesmu Sekarang Juga</h3></div>
					<form role="form" method="POST" action="<?php echo base_url();?>home/insert_data" id="kontes_form" >
						<input type="text" class="col-md-6 col-xs-12 name" name='nama_kontes' id='nama_kontes' placeholder='Nama Kontes *'/>
						 <div class="col-md-6 col-xs-12 name">
						 	<label style="padding-right: 10px" >Genre </label>
							  	<select class="multiselect" name ="genre[]" id="genre" multiple="multiple" >
                                     <?php
                                   
                                        foreach ($option_value->result() as $row)
                                         echo "<option id='genre' value=$row->id_genre>$row->genre</option>";
                                      ?>
                                </select>
							</div>
						<textarea class="col-md-12 col-xs-12" id='deskripsi' name="area" placeholder='Deskripsi *' style="margin-bottom: 1%;"></textarea>
						<input type="text" class="col-md-6 col-xs-12 name" name='tanggal_mulai' id='tanggal_mulai' placeholder='Tanggal Mulai Kontes *'/>
						<input type="text" class="col-md-6 col-xs-12 name" name='tanggal_selesai' id='tanggal_selesai' placeholder='Tanggal Penutupan Kontes *'/>
						<input type="number" class="col-md-12 col-xs-12 Subject" name='hadiah' placeholder='Hadiah (Rp)' />
						
						<div class="cBtn col-xs-12">
							<ul>
								<li class="clear"><a onclick="resetFormKontes();"><i class="fa fa-times"></i>clear form</a></li>
								<li class="send"><a onclick="insertDataKontes();"><i class="fa fa-share"></i>Send Message</a></li>
							</ul>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-xs-12 cont">
					<ul>
						<li><i class="fa fa-home"></i>Akan diisi alamat kantor lagumurni, dari database </li>
						<li><i class="fa fa-phone"></i>Akan diisi alamat no telp lagumurni, dari database </li>
						<li><a href="mailto:admin@lagumurni.com"><i class="fa fa-envelope"></i>admin@lagumurni.com</a>, dari database</li>
						<li><i class="fa fa-skype"></i>skype lagumurni, dari databse</li>
						<li><a href="#"><i class="fa fa-twitter"></i>Twitter lagumurni</a>, dari database</li>
						<li><a href="#"><i class="fa fa-facebook-square"></i>Facebook lagumurni</a>, dari database</li>
						<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble lagumurni</a>, dari database</li>
						<li><a href="#"><i class="fa fa-flickr"></i>Flickr lagumurni</a>, dari database</li>
						<li><a href="#"><i class="fa fa-youtube-play"></i>YouTube lagumurni</a>, dari database</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<h3>Subscribe for Our Newsletter!</h3>
						<p>Subscribe to our newsletter email to get notification about fresh news, latest promos, giveaways and free stuff from Skew. Stay always up-to-date!</p>
						<div class="fr">
						<div style="display: inline-block;">
							<input class="col-md-6 fEmail" name='Email' placeholder='Enter Your Email'/>
							<a href="#" class="subS">Subscribe!</a>
						</div>
						</div>
					</div>
					<div class="soc col-md-12">
						<ul>
							<li class="soc1"><a href="#"></a></li>
							<li class="soc2"><a href="#"></a></li>
							<li class="soc3"><a href="#"></a></li>
							<li class="soc4"><a href="#"></a></li>
							<li class="soc5"><a href="#"></a></li>
							<li class="soc6"><a href="#"></a></li>
							<li class="soc7"><a href="#"></a></li>
							<li class="soc8"><a href="#"></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<div class="col-md-12 text-right">
						<!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
						<input  id="searchPattern" type="search" placeholder="Search the Site"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
					</div>
					<div class="col-md-6 text-left copy">
						<p>Copyright &copy; 2014 lagumurni team. All Rights Reserved.</p>
					</div>
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active" ><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#project">Projects</a></li>
							<li><a href="#news">How</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#features">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>		