<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico">
    <title>Admin Panel</title>
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>css/webadmin-style.css" type="text/css" media="screen" />
    <link href="<?=base_url()?>css/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?=base_url()?>css/datatables/datatables.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?=base_url()?>css/ie.css" type="text/css" media="screen" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?=base_url()?>js/jquery-1.7.2.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url()?>js/jquery-ui-1.8.18.custom.min.js"></script>
    <script src="<?=base_url()?>js/webadmin/hideshow.js" type="text/javascript"></script>
    <script src="<?=base_url()?>js/webadmin/jquery.tablesorter.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>js/webadmin/ajaxfileupload/ajaxfileupload.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script src="<?=base_url()?>js/datatables/jquery.dataTables.js"></script>
	<script src="<?=base_url()?>js/datatables/datatables.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js"></script>
</head>
<body>

    <header id="header">
        <hgroup>
            <h1 class="site_title"><a href="<?=base_url()?>webadmin">LaguMurni Web Admin</a></h1>
            <h2 class="section_title"></h2><div class="btn_view_site"><a target="_blank" href="<?=base_url()?>">View Site</a></div>
        </hgroup>
    </header> <!-- end of header bar -->
    
    <section id="secondary_bar">
        <div class="user">
            <p><?=$this->session->userdata('username')?></p>
            <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
        </div>
        <div class="breadcrumbs_container">
            <article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current"><?=$current?></a></article>
        </div>
    </section><!-- end of secondary bar -->