<?php $this->load->view('includes/header'); ?>
<body>
    <h1>Gestão de Alunos</h1>
    <p>Esta é a página de gestão de alunos.</p>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Adicionar Aluno
</button>



</body>
<div class="container mt-5">
	<div class="card">
<h1>Lista de Alunos</h1>
<div class="table-responsive">
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
				<th>Ações</th>
            </tr>
        </thead>
        <tbody>
		<?php foreach ($alunos as $aluno): ?>
    <tr>
        <td><?php echo $aluno->id_aluno; ?></td>
        <td><strong><?php echo strtoupper($aluno->nome); ?></strong></td>
        <td><?php echo $aluno->idade; ?></td>
        <td><?php echo $aluno->email; ?></td>
        <td>
		<form method="post" action="<?php echo base_url('gestao-de-alunos/adicionar-aluno-turma'); ?>">
	    <input type="hidden" name="id_aluno" value="<?php echo $aluno->id_aluno; ?>">
    <select class="form-select mb-2" name="id_turma">
        <option class="form-control " value="">Selecione uma turma</option>
        <?php foreach ($turmas as $turma): ?>
            <option value="<?php echo $turma->id_turma; ?>"><?php echo $turma->nome; ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-success">Adicionar turma</button>
</form>

        </td>
        <td>
            <button class="btn btn-primary m-1 btn-sm">Editar aluno</button>
            <button class="btn btn-danger btn-sm">Remover aluno</button>
        </td>
    </tr>
<?php endforeach; ?>



        </tbody>
    </table>
</div>

</div>

	</div>
	</div>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('gestao-de-alunos/cadastrar'); ?>" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>
          <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="text" class="form-control" id="idade" name="idade">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>



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
