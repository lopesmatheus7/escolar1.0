<?php $this->load->view('includes/header'); ?>
<body>
    <h1>Gestão de turmas</h1>
    <p>Esta é a página de gestão de turmas.</p>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Adicionar turma
</button>



</body>
<div class="container mt-5">
	<div class="card">
        <h1>Listagem de Turmas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
					<th>Quantidade</th>
                    <th>Ano</th>
					<th>Ações</th>
                </tr>
            </thead>
            <tbody>
						<?php foreach ($turmas as $turma): ?>
    <tr>
        <td><?php echo $turma->id_turma; ?></td>
        <td><?php echo $turma->nome; ?></td>
        <td><?php echo $turma->total_alunos; ?></td> 
				<td><?php echo $turma->ano; ?></td>
        <td>
            <button class="btn btn-warning btn-alunos-turma" data-id-turma="<?php echo $turma->id_turma; ?>">Alunos da turma</button>
            <button class="btn btn-info">Editar</button>
            <button class="btn btn-danger">Excluir</button>
        </td>
    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('turmas/cadastrar'); ?>" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>
          <div class="mb-3">
            <label for="idade" class="form-label">Ano</label>
            <input type="text" class="form-control" id="ano" name="ano">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
$('.btn-alunos-turma').click(function() {
    var idTurma = $(this).data('id-turma');
    window.location.href = "<?php echo base_url('gestao_de_alunos/listar_alunos_turma/'); ?>" + idTurma;
});

</script>


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
