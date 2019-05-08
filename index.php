<?php 
require_once 'classes/usuarios.php';
$usuario = new Usuarios();
require_once 'menu.php';
?>

<?php
if (isset($_GET['deletar'])):
	$id = $_GET['id'];
	$usuario->deletar($id);
endif;
?>

		<h5>Lista de Usuario</h5>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th colspan="2">EMAIL</th>
				</tr>
			</thead>

			<?php foreach ($usuario->selectAll() as $key => $value): ?>
			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->email; ?></td>
					<td>
						<a href="editar.php?id=<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Editar</a>

						<?php
						echo "<a href='editar.php?id=".$value->id."' class='btn btn-primary btn-sm'>Editar</a>";
											
						echo "<a href='index.php?acao=deletar&id=".$value->id."' onclick='return confirm(\"Deseja Excluir?\")' class='btn btn-danger btn-sm'>Excluir</a>";
						?>
					</td>					
				</tr>
			</tbody>
			<?php endforeach ?>

		</table>		

</body>
</html>