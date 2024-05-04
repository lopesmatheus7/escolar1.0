<?php $this->load->view('includes/header'); ?>

<body>
    <h1>Alunos da turma</h1>
    <p>Esta é a página de alunos da turma.</p>

    <div class="container mt-5">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Idade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alunos_turma as $index => $aluno): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $aluno->nome; ?></td>
                                <td><?php echo $aluno->idade; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
