<!DOCTYPE html>
<html lang="en">
  <head>
		<title>LAGUMURNI - Say It With a Song</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='<?php echo base_url()?>css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/slicknav.css">
		<link rel="stylesheet" href="<?php echo base_url()?>css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-multiselect.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.datetimepicker.css">
		
		 <link rel="stylesheet" href="<?php echo base_url()?>css/table.css" media="screen" type="text/css" />
		
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="<?php echo base_url()?>js/camera.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/myscript.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url();?>js/jquery.datetimepicker.js"></script>
		<script src="<?php echo base_url()?>js/sorting.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
		<style>
			.multiselect-container{position:absolute;list-style-type:none;margin:0;padding:0}.multiselect-container .input-group{margin:5px}.multiselect-container>li{padding:0}.multiselect-container>li>a.multiselect-all label{font-weight:700}.multiselect-container>li>label.multiselect-group{margin:0;padding:3px 20px;height:100%;font-weight:700}.multiselect-container>li>a{padding:0}.multiselect-container>li>a>label{margin:0;height:100%;cursor:pointer;font-weight:400;padding:3px 20px 3px 40px}.multiselect-container>li>a>label.radio,.multiselect-container>li>a>label.checkbox{margin:0}.multiselect-container>li>a>label>input[type=checkbox]{margin-bottom:5px}.btn-group>.btn-group:nth-child(2)>.multiselect.btn{border-top-left-radius:4px;border-bottom-left-radius:4px}
		</style>
		
	</head>
	<body>
    
    <!--home start-->
    
    <div id="home">
      <div class="headerLine">
        <div id="menuF" class="default">
          <div class="container">
            <div class="row">
              <div class="logo col-md-4">
                <div><a href="#"><img src="images/logo.png"></a></div>
              </div>
              <div class="col-md-8">
                <div class="navmenu"style="text-align: center;">
                  <ul id="menu">
                    <li class="active" ><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#project">Projects</a></li>
                    <li><a href="#news">How</a></li>
                    <li class="last"><a href="#contact">Contact</a></li>
                    <?php
						if($logged_in != TRUE){
					?>
                    <li><a style="cursor:pointer" data-toggle="modal" data-target="#login-modal">Login</a></li>
					<?php
						}
						else{
					?>
						 <li class="dropdown"><a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown">Member Area</a>
							<ul class="dropdown-menu">
							  <li style="border:none"><a href="<?=base_url()?>member/contest_list" style="color:#000">Contest List</a></li>
							  <li style="border:none"><a href="<?=base_url()?>member/my_contest" style="color:#000">My Contest</a></li>
							  <li style="border:none"><a href="<?=base_url()?>member/my_followed_contest" style="color:#000">My Followed Contest</a></li>
							  <li><a href="<?=base_url()?>login/logout" style="color:#000">Logout</a></li>
							</ul>
						</li>
					<?php
						}
					?>
                    <li class="dropdown"><a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown">Languange</a>
						<ul class="dropdown-menu">
						  <li style="border:none"><a href="#" style="color:#000">Indonesia</a></li>
						  <li><a href="#" style="color:#000">English</a></li>
						</ul>
					</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row wrap">
            <div class="col-md-12 gallery">
              <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
                <div data-thumb="" data-src="images/slides/blank.gif">
                  <div class="img-responsive camera_caption fadeFromBottom">
                    <h2>We listen.</h2>
                  </div>
                </div>
                <div data-thumb="" data-src="images/slides/blank.gif">
                  <div class="img-responsive camera_caption fadeFromBottom">
                    <h2>We discuss.</h2>
                  </div>
                </div>
                <div data-thumb="" data-src="images/slides/blank.gif">
                  <div class="img-responsive camera_caption fadeFromBottom">
                    <h2>We make contest.</h2>
                  </div>
                </div>
              </div>
              <!-- #camera_wrap_1 -->
            </div>
          </div>
        </div>
      </div>
      <div class="container">
			<div class="row">
				<div class="col-md-4 project">
					<h3 id="counter">0</h3>
					<h4>Awesome Contest </h4>
					<p>Diisi &quot;record count&quot; dari tabel project (contest). </p>
				</div>
				<div class="col-md-4 project">
					<h3 id="counter1">0</h3>
					<h4>Happy Customers</h4>
					<p>Diisi &quot;record count&quot; dari tabel klien yang puas (untuk nama tabel bebas).</p>
				</div>
				<div class="col-md-4 project">
					<h3 id="counter2" style="margin-left: 20px;">0</h3>
					<h4 style="margin-left: 20px;">Professional Awards</h4>
					<p>Untuk yang ini msh belum tau akan diisi apa. </p>
				</div>
			</div>
	  </div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 cBusiness">
					<h3>Solutions Development Services Song In Count Hour</h3>
					<h4>Disini akan ditampilkan tentang keunggulan lagumurni.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 centPic">
					<img class="img-responsive"  src="images/bizPic.png"/>
				</div>
			</div>
		</div>   
    </div>
    
    <!--about start-->    
    
    <div id="about">
    	<div class="line2">
			<div class="container">
				<div class="row Fresh">
					<div class="col-md-4 Des">
						<i class="fa fa-heart"></i>
						<h4>Fresh & Clean Design</h4>
						<p>Menampilkan 3 keunggulan lagumurni yang paling memikat customer.</p>
					</div>
					<div class="col-md-4 Ver">
						<i class="fa fa-cog"></i>
						<h4>Very Flexible</h4>
						<p>Menampilkan 3 keunggulan lagumurni yang paling memikat customer.</p>
					</div>
					<div class="col-md-4 Fully">
						<i class="fa fa-tablet"></i>
						<h4>Fully Responsive</h4>
						<p>Menampilkan 3 keunggulan lagumurni yang paling memikat customer.</p>
					</div>		
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h3>Who We Are? Meet Our Team!</h3>
					<h4>We listen, we discuss, we advise and make a contest.</h4>
					<h4>Lagumurni very easy to use. However , if you have any questions , our team of Customer Delight ( below) is ready to help !</h4>
					<h4>They have a high level of hospitality and service that have been tested.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row team">
			  <div class="col-md-4 b1"> <img class="img-responsive" src="images/picTeam/picT1.png">
                  <h4>Tom Simpson</h4>
			    <h5>Customer Service </h5>
			    <p>Menampilkan sosok seorang &quot;Tom Simpson&quot; .</p>
			    <ul>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
			      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
			      <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
		        </ul>
		      </div>
			  <div class="col-md-4">
						<img class="img-responsive" src="images/picTeam/picT2.png">
						<h4>John Doe</h4>
						<h5>Customer Service .</h5>
						<p>Menampilkan sosok seorang &quot;John Doe&quot;</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
			  </div>
		
			
				<div class="col-md-4 b3">
						<img class="img-responsive" src="images/picTeam/picT3.png">
						<h4>Anna White</h4>
						<h5>Customer Service </h5>
						<p>Menampilkan sosok seorang &quot;Anna White&quot; .</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>
		  </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 hr1">
					<hr/>
				</div>
			</div>
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="64"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="64">
							  <span class="percent">64</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Pop</h3>
						<p>record count dari kontes dengan genre lagu pop (dalam %).<br>Kalo ada tambahan genre, bisa d tambahkan.</p>
					</div>
				</div>
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="22"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="22">
							  <span class="percent">22</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Jazz</h3>
						<p>record count dari kontes dengan genre lagu pop (dalam %).<br>Kalo ada tambahan genre, bisa d tambahkan. </p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="84"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="22">
							  <span class="percent">84</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Rock</h3>
						<p>record count dari kontes dengan genre lagu rock (dalam %).<br>Kalo ada tambahan genre, bisa d tambahkan. </p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="45"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="45">
							  <span class="percent">45</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Dangdut</h3>
						<p>record count dari kontes dengan genre lagu dangdut (dalam %).<br>Kalo ada tambahan genre, bisa d tambahkan. </p>
					</div>
				</div>
			</div>
		</div>	
		
		
		<div class="container">
			<div class="row aboutUs">
				<div class="col-md-12 ">
					<h3>What Our Customers Say About Us?</h3>
				</div>
			</div>
		</div>
		
		<div style="position: relative;">
		
			<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
						<img class="pic1Ab" src="images/picAbout/aboutP1.png">
							<h3>Anna Smith, Company Inc.</h3>
							<p>Customer menceritakan pengalamannnya menggunakan lagumurni. Data diambilkan dari database. Admin yang akan memilih, record mana yang akan ditampilkan.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about2">
						<img class="pic2Ab" src="images/picAbout/aboutP2.png">
							<h3>John Doe, Company Inc.</h3>
							<p>Customer menceritakan pengalamannnya menggunakan lagumurni. Data diambilkan dari database. Admin yang akan memilih, record mana yang akan ditampilkan.</p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="horL"></div>
		
			<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
						<img class="pic1Ab" src="images/picAbout/aboutP3.png">
							<h3>Tom Sawyer, Company Inc.</h3>
							<p>Customer menceritakan pengalamannnya menggunakan lagumurni. Data diambilkan dari database. Admin yang akan memilih, record mana yang akan ditampilkan.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about2">
						<img class="pic2Ab" src="images/picAbout/aboutP4.png">
							<h3>Sarah White, Company Inc.</h3>
							<p>Customer menceritakan pengalamannnya menggunakan lagumurni. Data diambilkan dari database. Admin yang akan memilih, record mana yang akan ditampilkan.</p>
						</div>
					</div>
				</div>
			</div>
		
		</div>
    </div>
    <!--project start-->    
    <div id="project">    	
		<div class="line3">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
					<span name="projects" id="projectss"></span>
					<h3>Our Amazing Works</h3>
					<p>Menampilkan contoh2 project yang sukses, ambil data dari database </p>
					</div>
				</div>
			</div>
		</div>          
    
    
       <div class="container">
		
		<div class="row">
			<!-- filter_block -->
				<div id="options" class="col-md-12" style="text-align: center;">	
					<ul id="filter" class="option-set" data-option-key="filter">
						<li><a onclick="load_kontes_by_genre('')" class="selected" href="#filter" data-option-value="*" class="current">All Genre</a></li>
						<?php
							foreach ($option_value->result() as $row):
						?>
						<li><a onclick="load_kontes_by_genre('<?=$row->id_genre?>')" href="#filter" data-option-value=".<?=$row->id_genre?>"><?=$row->genre?></a></li>
						<?php
							endforeach;
						?>
					</ul>
				</div><!-- //filter_block -->
		
		
		
			<div class=" columns3   pretty" data-animated="fadeIn" id="list_kontes">	
				<?php
					$query = $this->project_model->tt_kontes_select_by_id_genre('all');
					foreach ($query->result() as $row){
				?>
				<div class="element col-sm-4  gall <?=$row->id_genre?>">
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
			</div>
			
			
				
					<div class="col-md-12 cBtn  lb" style="text-align: center;">
						<ul class="load_more_cont ">
							<li class="dowbload btn_load_more">
								<a href="javascript:void(0);" >
									<i class="fa fa-arrow-down"></i>Load More Projects
								</a>
							</li>
						</ul>
					</div>
			
		</div>
			
			<script type="text/javascript">
				jQuery(window).load(function(){
					items_set = [
					
						{category : 'branding', lika_count : '77', view_count : '234', src : 'images/prettyPhotoImages/pic9.jpg', title : 'Foil Mini Badges', content : '' },
						
						{category : 'polygraphy', lika_count : '45', view_count : '100', src : 'images/prettyPhotoImages/pic7.jpg', title : 'Darko – Business Card Mock Up', content : '' },
						
						{category : 'text_styles', lika_count : '22', view_count : '140', src : 'images/prettyPhotoImages/pic8.jpg', title : 'Woody Poster Text Effect', content : '' }
						

					];
					jQuery('.portfolio_block').portfolio_addon({
						type : 1, // 2-4 columns simple portfolio
						load_count : 3,
						
						items : items_set
					});
					$('#container').isotope({
					  animationOptions: {
						 duration: 900,
						 queue: false
					   }
					});
				});
			</script>
	  </div>
    </div>    
    
    <!--news start-->
    
    <div id="news">
    	<div class="line4">		
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>How It&rsquo;s Work?</h3>
					<p>Akan diisi tata cara membuat kontes dan mendapatkan pemenang kontes</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
				 <div class="wrapper">
        <!-- PRICING-TABLE CONTAINER -->
        <div class="pricing-table group">
            <h1 class="heading">
                Pricing overview
            </h1>
            <!-- PERSONAL -->
            <div class="block personal fl">
                <h2 class="title">personal</h2>
                <!-- CONTENT -->
                <div class="content">
                    <p class="price">
                        <sup>Rp</sup>
                        <span> 1000</span>
                        <sub>K</sub>
                    </p>
                    <p class="hint">Perfect for freelancers</p>
                </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Maks 4 Pilihan </li>
                    <li><span class="fontawesome-star"></span>Tidak ada revisi .</li>
                    <li><span class="fontawesome-dashboard"></span>Maks Durasi 7 hari </li>
                    <li><span class="fontawesome-cloud"></span>Tidak Ada Garansi</li>
                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <p>Host My Website</p>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /PERSONAL -->
            <!-- PROFESSIONAL -->
            <div class="block professional fl">
                <h2 class="title">Professional</h2>
                <!-- CONTENT -->
                <div class="content">
                  <p class="price"> <sup>Rp</sup> <span>2000</span> <sub>K</sub> </p>
                  <p class="hint">Suitable for startups</p>
              </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Maks 10 Pilihan </li>
                    <li><span class="fontawesome-star"></span>Revisi Terbatas .</li>
                    <li><span class="fontawesome-dashboard"></span>Maks Durasi 10 hari </li>
                    <li><span class="fontawesome-cloud"></span>Garansi Uang Kembali </li>
                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <p>Host My Website</p>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /PROFESSIONAL -->
            <!-- BUSINESS -->
            <div class="block business fl">
                <h2 class="title">Business</h2>
                <!-- CONTENT -->
                <div class="content">
                    <p class="price">
                        <sup>Rp</sup>
                        <span>3500</span>
                        <sub>K</sub>
                    </p>
                    <p class="hint">For established business</p>
                </div>
                <!-- /CONTENT -->

                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Maks 25 Pilihan</li>
                    <li><span class="fontawesome-star"></span>Revisi tidak terbatas .</li>
                    <li><span class="fontawesome-dashboard"></span>Maks Durasi 15 hari </li>
                    <li><span class="fontawesome-cloud"></span>Garansi Uang Kembali </li>
                </ul>
                <!-- /FEATURES -->

                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <p>Host My Website</p>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /BUSINESS -->
        </div>
        <!-- /PRICING-TABLE -->
    </div>
	  </div>
			<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news3.jpg"/>
					<h3><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news4.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			
			
			
			<div class="container hideObj2" style="display:none;">
				<div class="row news2 news">
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row cBtn">
				<div class="col-md-12" style="text-align: center; margin-bottom: -90px; z-index: 10;">
					<ul class="mNews">
						<li class="dowbload bhide2"><a href="#"><i class="fa fa-arrow-down"></i>Load More news</a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
    
    
    <!--contact start-->
    
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
					<form>
						<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Name *'/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email *'/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Subject'/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Message *'></textarea>
						<div class="cBtn col-xs-12">
							<ul>
								<li class="clear"><a href="#"><i class="fa fa-times"></i>clear form</a></li>
								<li class="send"><a href="#"><i class="fa fa-share"></i>Send Message</a></li>
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
		<div class="line6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092" width="100%" height="750" frameborder="0" style="border:0"></iframe>			
		</div>
		<div class="container">
			<div class="row ftext">
				<div class="col-md-12">
				<a id="features"></a>
				<h3>We Care About Our Clients and Can Make Their Life Easier!</h3>
				<p>The main peculiarity of template is the striking presentation when visitors just need to use the scrolling option to find all necessary information about your web project. </p>
				</div>
				<div class="cBtn">
					<ul style="margin-top: 23px; margin-bottom: 0px; padding-left: 26px;">
						<li class="dowbload"><a href="#"><i class="fa fa-star"></i>View All Features</a></li>
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
    
		
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?echo base_url();?>js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script type="text/javascript">

		function insertDataKontes(){
			
			$.ajax({
		    url: "<?php echo base_url()?>home/insert_data",
		    type: "POST",
		    data:$('#kontes_form').find('input, select, textarea, button').serialize(),
		    success: function (response) {
		        alert("Data Save: " + response);
				    $(this).closest('form').find("input[type=text], textarea").val("");
		    }
		});
		}
		
		function resetFormKontes(){
			
		}
		
	
	
		$(document).ready(function() {
			    $('.multiselect').multiselect();
			    
			    $('#tanggal_mulai').datetimepicker({
				  format:'Y-m-d H:i'
				});
				
				$('#tanggal_selesai').datetimepicker({
				  format:'Y-m-d H:i'
				});
			});
	
	
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999;">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Login</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" id="form-login" method="post" action="<?=base_url();?>login/login_check">
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Username</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Password</label> -->
					<div class="col-sm-12">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
					</div>
				</div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" id="login"><span class="glyphicon glyphicon-lock"></span> Log In</button>
			<button type="button" class="btn btn-primary" id="register" data-toggle="modal" data-target="#register-modal"><span class="glyphicon glyphicon-user"></span> Register</button>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal  -->
	
	
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Register</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" id="form-register" action="<?=base_url();?>registrasi/insert_data">
				<div class="form-group">
					<!--<label class="col-sm-2 control-label" for="">Username</label>-->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="username" id="username_register" placeholder="Username"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Password</label> -->
					<div class="col-sm-12">
						<input type="password" class="form-control validate-form" name="password" id="password_register" placeholder="Password"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Retype Password</label> -->
					<div class="col-sm-12">
						<input type="password" class="form-control validate-form" name="retype_password" id="retype_password" placeholder="Retype Password"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Full Name</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="nama_lengkap" id="nama_lengkap" placeholder="Full Name"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Tanggal Lahir</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Email</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="alamat_email" id="alamat_email" placeholder="Email"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Alamat</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="alamat" id="alamat" placeholder="Alamat"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Kota</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="kota" id="kota" placeholder="Kota"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Negara</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="negara" id="negara" placeholder="Negara"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">No. HP </label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="no_hp" id="no_hp" placeholder="No. HP "/>
					</div>
				</div>
			</form>
		   </div>
		   <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-primary" id="save_register">Register</button>
		  </div>
		  </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal  -->
	
	
	<script type="text/javascript">
		function load_kontes_by_genre(parameter){
			// $('#list_kontes').hide(300);
			// $('#list_kontes').show(300);
			$('#list_kontes').load('<?=base_url()?>/home/list_kontes_by_genre/',{id_genre:parameter},function(){
				
			});
		}
		
		$("#login").click(function() {
			var form = $('#form-login');
			var username = $("#username");
			var password = $("#password");
			if(username.val() == ''){
				alert("Username can not be empty!");
				username.focus();
				return false;
			}
			else if(password.val() == ''){
				alert("Password can not be empty!");
				password.focus();
				return false;
			}
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: form.attr('action'),
				data: form.serialize(),
				success: function(data,status) {
					if(data.status != 'error'){
						if(data.msg == '1'){
							window.location.href ='<?=base_url()?>webadmin';
						}
						else{
							window.location.href = '<?=base_url()?>';
						}
					}
					else{
						alert(data.msg);
					}
				}
			})
				return false;
		});
		
		$("#save_register").click(function() {
			var form = $('#form-register');
			var empty = false;
			var temp_field = null;
			var password_register = $("#password_register").val()
			var retype_password = $("#retype_password").val()
			var input = form.find('.validate-form').filter(function() {
				if(this.value === ""){
					empty = true;
					if(temp_field == null){
						temp_field = $(this);
					}
				}
			});
			if(empty){
				temp_field.focus();
				// alert(temp_field.attr("id"));
				alert("All input must be filled!");
				return false;
			}
			else if(retype_password!=password_register){
				alert("Password doesn't match");
				$("#retype_password").focus();
				return false;
			}
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: form.attr('action'),
				data: form.serialize(),
				success: function(data,status) {
					if(data.status != 'error'){
						$("#register-modal").modal('hide');
					}
					alert(data.msg);
				}
			})
				return false;
		});
	</script>
</html>