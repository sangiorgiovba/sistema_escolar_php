<?php  $this->view('includes/header') ;?>
<?php  $this->view('includes/nav') ;?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		<?php $this->view('includes/paginas')?>

		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?=ASSETS?>/usuario1.jpg" class="border border-primary d-block mx-auto rounded-circle " style="width:150px;">
				<h3 class="text-center">Carlos</h3>
			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
				<table class="table table-hover table-striped table-bordered">
					<tr><th>Nome:</th><td>Carlos</td></tr>
					<tr><th>S_Nome:</th><td>Mendes</td></tr>
					<tr><th>Sexo:</th><td>Masculino</td></tr>
					<tr><th>Data:</th><td>15/11/2021</td></tr>

				</table>
			</div>
		</div>
		<br>
		<div class="container-fluid">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Informacao Basicas</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Classes</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Testes</a>
			  </li>
		 
			</ul>

			<nav class="navbar navbar-light bg-light">
			  <form class="form-inline">
			    <div class="input-group">
			      <div class="input-group-prepend">
			        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
			      </div>
			      <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Search" aria-describedby="basic-addon1">
			    </div>
			  </form>
			</nav>

		</div>
	</div>
<?php  $this->view('includes/footer') ;?>
