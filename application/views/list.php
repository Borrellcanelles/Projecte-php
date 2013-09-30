<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<tittle> Llista d'usuaris </tittle>


 
	<!-- <style type="text/css" title="currentStyle"> 
		@import "/demo_page.css"; @import "/header.ccss";
		@import "/demo_table.css";
	</style> -->

	<!-- <script type="text/javascript" language="javascript" src="/javascript/jquery/jquery.js"></script>

	<script type="text/javascript" language="javascript" src="/javascript/jquery/datatables/jquery.dataTables.js"></script> -->

		 <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#25').dataTable();
			} );
		</script>
	</head>

<body>
	<p>Aquesta es la taula d'usuaris</p>
	<table id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
	<thead>
		<tr>
			<th><b>Nom</b></th>
			<th><b>DNI</b></th>
			<th><b>Direccio</b></th>
			<th><b>Edad</b></th>
			<th><b>Sexe</b></th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Manolita</td>
			<td>41423658D</td>
			<td>Av/error</td>
			<td>22</td>
			<td>M</td>
		</tr>
		<tr>
			<td>Dirtino</td>
			<td>13458251Q</td>
			<td>C.404</td>
			<td>25</td>
			<td>H</td>
		</tr>
		<tr>
			<td>Emma</td>
			<td>46582137A</td>
			<td>C.English</td>
			<td>20</td>
			<td>M</td>
		</tr>
		<tr>
			<td>Fructuoso</td>
			<td>44552211F</td>
			<td>C.Taberna</td>
			<td>66</td>
			<td>H</td>
		</tr>
		</tbody>
</table>
</body>
</html>
