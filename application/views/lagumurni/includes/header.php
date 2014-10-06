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
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>skin/jplayer.blue.monday.css">
		
		 <link rel="stylesheet" href="<?php echo base_url()?>css/table.css" media="screen" type="text/css" />
		<link rel="stylesheet" href="<?=base_url()?>css/datatables/datatables.css">
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
		<script src="<?=base_url()?>js/datatables/jquery.dataTables.js"></script>
		<script src="<?=base_url()?>js/datatables/datatables.js"></script>
		<script src="<?=base_url()?>js/ajaxfileupload.js"></script>
		<script src="<?=base_url()?>js/jquery.jplayer.min.js"></script>
		<script src="<?=base_url()?>js/autoNumeric.js"></script>
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
	</head>
	<body>
    
    <!--home start-->
    
    <div id="home">
      <div class="headerLine">
        <div id="menuF" class="default">
          <div class="container">
            <div class="row">
              <div class="logo col-md-4">
                <div><a href="#"><img src="<?php echo base_url()?>images/logo.png"></a></div>
              </div>
              <div class="col-md-8">
                <div class="navmenu"style="text-align: center;">
                  <ul id="menu">
                    <li class="active" ><a href="<?php echo base_url()?>#home">Home</a></li>
                    <li><a href="<?php echo base_url()?>#about">About</a></li>
                    <li><a href="<?php echo base_url()?>#project">Projects</a></li>
                    <li><a href="<?php echo base_url()?>#news">How</a></li>
                    <li class="last"><a href="<?php echo base_url()?>#contact">Contact</a></li>
                    <?php
						if(!$this->session->userdata('logged_in')){
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
                <div data-thumb="" data-src="<?php echo base_url()?>images/slides/blank.gif">
                  <div class="img-responsive camera_caption fadeFromBottom">
                    <h2>We listen.</h2>
                  </div>
                </div>
                <div data-thumb="" data-src="<?php echo base_url()?>images/slides/blank.gif">
                  <div class="img-responsive camera_caption fadeFromBottom">
                    <h2>We discuss.</h2>
                  </div>
                </div>
                <div data-thumb="" data-src="<?php echo base_url()?>images/slides/blank.gif">
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
    </div>