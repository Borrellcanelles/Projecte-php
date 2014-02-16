<!DOCTYPE html>
<html>
	<head>
		<title>LLista</title>
		<?php include("capçalera.php"); ?>
		
<!-- table tools -->		
<script type="text/javascript">
	$(document).ready( function () {
    $('#25').dataTable( {
        "sDom": 'T<"clear">lfrtip',
        "oTableTools": {
            "sSwfPath": "<?php echo base_url('assets/media/swf/copy_csv_xls_pdf.swf');?>"
        }
    } );
} );
</script>
<!-- fixed header -->
<script type="text/javascript">
$(document).ready( function () {
	var oTable = $('#25').dataTable();
	new FixedHeader( oTable );
} );
</script>


<!--Script i funcio fixed columns-->
<!-- <script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/media/js/FixedColumns.js');?>"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				var oTable = $('#25').dataTable( {
					"sScrollY": "300px",
					"sScrollX": "100%",
					"sScrollXInner": "150%",
					"bScrollCollapse": true,
					"bPaginate": false
				} );
				new FixedColumns( oTable );
			} );
		</script> -->
<script type="text/javascript">
$(document).ready(function() {
	$('#users_table').dataTable({    
	"bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": true
	});
} );
</script>


<!-- algun script q sincerament no se lo q fa..
<script>
$(document).ready( function () {
	$('#25').dataTable( {
		"sDom": 'C<"clear">lfrtip'
	} );
} );
</script>
-->
			<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<!--Table Tools-->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/media/js/ZeroClipboard.js')?>"></script>
<script type="text/javascript" charset="utf-8" src="../../../assets/media/js/TableTools.js"></script>


<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url('assets/media/css/TableTools.css');?>";
			@import "<?php echo base_url('assets/media/css/TableTools_JUI.css');?>";
		</style>

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

	 <script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#25').dataTable();
		} );
	</script>
	

	</head>
	<body>
		<p>Aquesta es la taula d'usuaris</p>
		<a href="crear"><button class="btn btn-success" type="button">Crear usuari</button></a>
		<table class="table-striped" id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
		<thead>
		<tr>
			<th><b>ID</b></th>
			<th><b>Nom</b></th>
			<!--<th><b>DNI</b></th>
			<th><b>Direccio</b></th>
			<th><b>Edad</b></th>
			<th><b>Sexe</b></th>-->
			<th><b>Accions</b></th>
		</tr>
		</thead>
		<tbody>
 <?php foreach($query->result() as $index) {?> 
			<tr>
			<td> <?php echo $index -> actor_id; ?></td>
			<td> <?php echo $index -> fullname; ?></td>
			
			<td>
				<a href='modificar/<?php echo $index->actor_id;?>'><button class="btn btn-primary" type="button">Modificar</button></a>
				<a href='eliminar/<?php echo $index->actor_id; ?>'><button class="btn btn-danger" type="button">Eliminar</button></a></td>
			<?php echo "</tr>"; } ?> 
			
		</tbody>
</table>
</body>
</html>
<?php  ?>
