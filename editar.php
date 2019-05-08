<?php 
require_once 'classes/usuarios.php';
$usuario = new Usuarios();
require_once 'menu.php';
?>

<h5>Editando usuario</h5>
<hr>

<?php
$id = $_GET['id'];
$dado = $usuario->selectUnit($id);
?>

<form action="" method="POST" accept-charset="utf-8">

	<label for="">Nome :</label>
	<br>
	<input type="text" name="nome" value="<?php echo $dado->nome  ?>">
	<br>
	<label for="">Email :</label>
	<br>
	<input type="email" name="email" value="<?php echo $dado->email  ?>">
	<br><br>
	<input type="submit" name="atualizar" value="Atualizar">
</form>

<?php 
if (isset($_POST['atualizar'])):

	$id = (int)$_GET['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$usuario->setNome($nome);
	$usuario->setEmail($email);

	if ($usuario->update($id, $nome, $email)) {
		echo "Atualizado com sucesso!";
		
	}
endif;
?>