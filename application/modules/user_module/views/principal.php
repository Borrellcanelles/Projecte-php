<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->lang->line('title'); ?></title>
<?php include("capçalera.php"); ?>
	</head>
    <body>
		<p>
			<h1>INDEX :</h1> </p>
		<p>
			<h2>Usuaris</h2></p>
		<ul>
			<li> <a href="/codeigniterhelloworld/index.php/user_module/usuaris/listusers"><?php echo $this->lang->line('list_users'); ?></a>
			
			<li>
				<a href="/codeigniterhelloworld/index.php/user_module/usuaris/crear"><?php echo $this->lang->line('create_user'); ?></a></li>
		</ul>
		<p>
			<br />
			<h2>Configuracio</h2></p>
		<ul>
			<li>
				<a href="/codeigniterhelloworld/index.php/configuracio/canviarpassword"><?php echo $this->lang->line('change_password'); ?></a></li>
			<li>
				<a href="/codeigniterhelloworld/index.php/configuracio/sortir"><?php echo $this->lang->line('logout'); ?></a></li>
		</ul>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    </body>
    </html>
