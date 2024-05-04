
<?php $this->load->view('includes/header'); ?>

<main class="form-signin">
	<div class="container mt-5 p-5 w-50">
  <form>
	<div class="container text-center mt-5 p-5 w-50">
	<img class="mb-4" src="<?= base_url('assets/inpi.png') ?>" alt="Minha Imagem" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Seja bem-vindo!</h1>
		<div class="container">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Me lembre
      </label>
    
	</div>
    <button class="w-100 btn btn-lg btn-success" type="submit">Entrar</button>

		<button id="btnAbrirModal" class="w-100 btn mt-2 btn-lg btn-warning" type="button">Cadastrar</button>


    <p class="mt-5 mb-3 text-muted">&copy; 2024–2024</p>
  </form>
	</div>
		</div>
	</div>
</main>


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulário de Cadastro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
				<form method="post" action="<?= base_url() ?>user/add">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" id="username">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Contato</label>
                        <input type="text" maxlength="10" class="form-control" name="mobile" placeholder="Mobile" id="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Endereço</label>
                        <input type="text" name="address" placeholder="Address" class="form-control" id="address">
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
      </div>
    </div>
  </div>
</div>


  </body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById("btnAbrirModal").addEventListener("click", function() {
  var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
    keyboard: false
  });
  myModal.show();
});
</script>

</html>
