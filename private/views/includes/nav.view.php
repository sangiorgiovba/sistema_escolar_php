
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  	<a class="navbar-brand" href="#">
  		<img src="<?=ROOT?>/assets/logo.png" class="" style="width:50px;">
  		Escola PHP
	</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="<?=ROOT?>">Painel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/users">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/classes">Classes</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/tests">Testes</a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=ROOT?>/profile">Perfil</a>
          <a class="dropdown-item" href="<?=ROOT?>">Painel</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=ROOT?>/logout">Sair</a>
        </div>
      </li>

    </ul>
  </div>
</nav>