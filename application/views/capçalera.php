<?php $this->load->helper('url');?>



<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administració</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url();?>assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					<!--falta ficar los if esta url active menu-->
					
					<? $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
<?php
switch ($actual_link) {

case "http://localhost/projectephp/index.php/principal/principal1":?>
<li>
                        <a  class="active-menu" href="principal1"><i class="fa fa-dashboard fa-3x"></i> Principal</a>
                    </li>
                      <li>
                        <a href="comandes"><i class="fa fa-desktop fa-3x"></i> Comandes</a>
                    </li>
                    <li>
                        <a  href="llibres"><i class="fa fa-qrcode fa-3x"></i> Llibres</a>
                    </li>
						   <li  >
                        <a  href="ventes"><i class="fa fa-bar-chart-o fa-3x"></i> Ventes</a>
                    </li>	
                      <li  >
                        <a  href="clients"><i class="fa fa-table fa-3x"></i> Clients</a>
                    </li>
<? break; ?>
<?
case "http://localhost/projectephp/index.php/principal/comandes":?>
<li>
                        <a  href="principal1"><i class="fa fa-dashboard fa-3x"></i> Principal</a>
                    </li>
                      <li>
                        <a class="active-menu" href="comandes"><i class="fa fa-desktop fa-3x"></i> Comandes</a>
                    </li>
                    <li>
                        <a  href="llibres"><i class="fa fa-qrcode fa-3x"></i> Llibres</a>
                    </li>
						   <li  >
                        <a  href="ventes"><i class="fa fa-bar-chart-o fa-3x"></i> Ventes</a>
                    </li>	
                      <li  >
                        <a  href="clients"><i class="fa fa-table fa-3x"></i> Clients</a>
                    </li>
<? break; ?>
<?
case "http://localhost/projectephp/index.php/principal/llibres":?>
<li>
                        <a  href="principal1"><i class="fa fa-dashboard fa-3x"></i> Principal</a>
                    </li>
                      <li>
                        <a  href="comandes"><i class="fa fa-desktop fa-3x"></i> Comandes</a>
                    </li>
                    <li>
                        <a class="active-menu" href="llibres"><i class="fa fa-qrcode fa-3x"></i> Llibres</a>
                    </li>
						   <li  >
                        <a  href="ventes"><i class="fa fa-bar-chart-o fa-3x"></i> Ventes</a>
                    </li>	
                      <li  >
                        <a  href="clients"><i class="fa fa-table fa-3x"></i> Clients</a>
                    </li>
<? break; ?>
<?
case "http://localhost/projectephp/index.php/principal/ventes":?>
<li>
                        <a  href="principal1"><i class="fa fa-dashboard fa-3x"></i> Principal</a>
                    </li>
                      <li>
                        <a  href="comandes"><i class="fa fa-desktop fa-3x"></i> Comandes</a>
                    </li>
                    <li>
                        <a  href="llibres"><i class="fa fa-qrcode fa-3x"></i> Llibres</a>
                    </li>
						   <li  >
                        <a class="active-menu"  href="ventes"><i class="fa fa-bar-chart-o fa-3x"></i> Ventes</a>
                    </li>	
                      <li  >
                        <a  href="clients"><i class="fa fa-table fa-3x"></i> Clients</a>
                    </li>
<? break;
default : ?>
<li>
                        <a  href="principal1"><i class="fa fa-dashboard fa-3x"></i> Principal</a>
                    </li>
                      <li>
                        <a href="comandes"><i class="fa fa-desktop fa-3x"></i> Comandes</a>
                    </li>
                    <li>
                        <a  href="llibres"><i class="fa fa-qrcode fa-3x"></i> Llibres</a>
                    </li>
						   <li  >
                        <a  href="ventes"><i class="fa fa-bar-chart-o fa-3x"></i> Ventes</a>
                    </li>	
                      <li  >
                        <a class="active-menu" href="clients"><i class="fa fa-table fa-3x"></i> Clients</a>
                    </li>
</ul> 
               <?} ?>
            </div>
            
            
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url();?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    
    
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
