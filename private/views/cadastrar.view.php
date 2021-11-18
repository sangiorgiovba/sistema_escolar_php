<?php $this->view('includes/header')?>
 
	<div class="container-fluid">

		<form method="post">
		<div class="p-1 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center">Escola PHP</h2>
			<img src="<?=ROOT?>/assets/logo.png" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;">
			<h3 class="text-center">Cadastrar Usuarios</h3>

			<?php if(count($errors) > 0):?>
			<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
			  <strong>Errors:</strong>
			   <?php foreach($errors as $error):?>
			  	<br><?=$error?>
			  <?php endforeach;?>
			  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </span>
			</div>
			<?php endif;?>

			<input class="my-2 form-control" value="<?=get_var('name')?>" type="name" name="name" placeholder="Digite seu Nome" >
			<input class="my-2 form-control" value="<?=get_var('sname')?>" type="sname" name="sname" placeholder="Sobre Nome" >
			<input class="my-2 form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" >

			<select class="my-2 form-control" name="sexo">
				<option <?=get_select('sexo','')?> value="">--Selecione Sexo--</option>
				<option <?=get_select('sexo','masculino')?> value="masculino">Masculino</option>
				<option <?=get_select('sexo','feminino')?> value="feminino">Feminino</option>
			</select>
			<select class="my-2 form-control" name="nivel">
				<option <?=get_select('nivel','')?> value="">--Selecione Nivel--</option>
				<option <?=get_select('nivel','estudante')?> value="estudante">Estudante</option>
				<option <?=get_select('nivel','recepicionista')?> value="recepicionista">Recepicionista</option>
				<option <?=get_select('nivel','conferencista')?> value="conferencista">Conferencista</option>
				<option <?=get_select('nivel','admin')?> value="admin">Administrador</option>
				<option <?=get_select('nivel','super_admin')?> value="super_admin">Super Administrador</option>
				

			</select>

			<input class="my-2 form-control" value="<?=get_var('password')?>" type="text" name="password" placeholder="Digite Sua Senha">
			<input class="my-2 form-control" value="<?=get_var('password2')?>" type="text" name="password2" placeholder="Repita sua senha">
			<br>
			<button class="btn btn-primary ">Cadastrar</button>
			<button type="button" class="btn btn-danger float-end">Cancelar</button>
			</a>
		</div>
		</form>
	</div>

<?php $this->view('includes/footer')?>