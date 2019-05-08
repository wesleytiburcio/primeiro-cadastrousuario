<?php 
require_once 'classes/usuarios.php';
$usuario = new Usuarios();
require_once 'menu.php';
?>

<h5>Cadastrando um novo usuario</h5>
<hr>

<form action="" method="POST" accept-charset="utf-8">
	<label>Nome:</label><br>
	<input type="text" name="nome" placeholder="nome">
	<br>
	<label>Email:</label><br>
	<input type="email" name="email" placeholder="email">
	<br><br>
	<input type="submit" name="cadastrar" value="Cadastrar" class='btn btn-success'>
</form>

<?php 
if (isset($_POST['cadastrar'])) {

	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$usuario->setNome($nome);
	$usuario->setEmail($email);

	if ($usuario->inserir()) {
		echo "Inserido com sucesso!";
	}
}
?>