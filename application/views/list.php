<!DOCTYPE html>
<html>
	<head>
		<title>LLista</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<script src="http://code.jquery.com/jquery.js"></script>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">Llista Usuaris</a>
				<ul class="nav">
					<li class="active"><a href="/codeigniterhelloworld/index.php/principal/principal1">P&agrave;gina principal</a></li>
					<li><a href="/codeigniterhelloworld/index.php/usuaris/modificar">Modifica el teu usuari</a></li>
					<li><a href="/codeigniterhelloworld/index.php/configuracio/canviarpassword">Canvia la teva password</a></li>
					<li><a href="/codeigniterhelloworld/index.php/configuracio/sortir">Sortir</a></li>
				</ul>
			</div>
		</div>
		<p>Aquesta es la taula d'usuaris</p>
		<table class="table-striped" id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
		<thead>
		<tr>
			<th><b>ID</b></th>
			<th><b>Nom</b></th>
			<th><b>DNI</b></th>
			<th><b>Direccio</b></th>
			<th><b>Edad</b></th>
			<th><b>Sexe</b></th>
			<th><b>Accions</b></th>
		</tr>
		</thead>
		<tbody>
		<tr class="success">
			<td>1</td>
			<td>Manolita</td>
			<td>41423658D</td>
			<td>Av/error</td>
			<td>22</td>
			<td>M</td>
			<td><a href="modificarusuari/1"><button class="btn btn-primary" type="button">Modificar</button></a>
			<a href="eliminarusuari/1"><button class="btn btn-danger" type="button">Eliminar</button></a></td>
		</tr>
		<tr class="warning">
			<td>2</td>
			<td>Dirtino</td>
			<td>13458251Q</td>
			<td>C.404</td>
			<td>25</td>
			<td>H</td>
			<td><a href="modificarusuari/2"><button class="btn btn-primary" type="button">Modificar</button></a>
			<a href="eliminarusuari/2"><button class="btn btn-danger" type="button">Eliminar</button></a>
		</tr>
		<tr>
			<td>3</td>
			<td>Emma</td>
			<td>46582137A</td>
			<td>C.English</td>
			<td>20</td>
			<td>M</td>
			<td><a href="modificarusuari/3"><button class="btn btn-primary" type="button">Modificar</button></a>
			<a href="eliminarusuari/3"><button class="btn btn-danger" type="button">Eliminar</button></a>
		</tr>
		<tr>
			<td>4</td>
			<td>Fructuoso</td>
			<td>44552211F</td>
			<td>C.Taberna</td>
			<td>66</td>
			<td>H</td>
			<td><a href="modificarusuari/4"><button class="btn btn-primary" type="button">Modificar</button></a>
			<a href="eliminarusuari/4"><button class="btn btn-danger" type="button">Eliminar</button></a>
		</tr>
		</tbody>
</table>
 <script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
