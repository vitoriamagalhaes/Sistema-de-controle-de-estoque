<?php

include 'includes/header.php';


$result = mysqli_query($conn, "SELECT * FROM tipo ORDER BY id_tipo ASC");
$row = mysqli_num_rows($result);


?>

	<head>
		<title> Sistema de estoque </title>

	</head>

	<script>
		function confirmacao() {
			if (confirm("Deseja excluir esse item?")) {return true;} else {return false;}}	
	</script>

	<body>
		
		<br><br>

		<h1 style="text-align: center; font-size: 30px;"> Consulta de categorias de produtos </h1>
		<br>

		<table class="table table-bordered">
			<thead>
				<th  style="text-align: center;"> Id </th>
				<th  style="text-align: center;"> Tipo </th>
				<th  style="text-align: center;"> Ação </th>
			</thead>
			<tbody>
			<?php
				while($linha = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $linha ['id_tipo']; ?></td>
				<td><?php echo $linha ['tipo']; ?></td>
				<td> <a href="editar_tipo.php?id_tipo=<?php echo $linha['id_tipo']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"> <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg></a>
					 <a href="deletar_tipo.php?id_tipo=<?php echo $linha['id_tipo']; ?>" onclick="return confirmacao()">

					 	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></a>
				</td>
			</tr>
			<?php
				}

				if($row == 0){
					echo "Nenhum registro encontrado";
				}
			?>
			</tbody>

	
		</table>
		<br><br>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="cadastro_tipo.php" type="button" class="btn btn-info align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
</svg> Cadastrar novo tipo</a>

  </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>