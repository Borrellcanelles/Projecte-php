<html>
	<head>
		<title>LLista</title>
		<?php include("capçalera.php"); ?>
	</head>
	<body>
<h1>Crea el teu Usuari</h1>
<form action="../usuaris/crear" method="post">
          <table border = "0">
            <tr>
              <td>Id:</td>
              <td><input type="text" name="actor_id"></td>
            </tr>
            <tr>
             <td>Nom:</td>
              <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
             <td><input type="Submit" value="Enviar"></td>
              <td><input type="Reset" value="Cancelar"></td>
            </tr> 
         </table>
        </form>
</div>
</body>
</html>
