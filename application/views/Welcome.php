<?php $this->load->view('includes/header'); ?>

<body>
    <h1>Dashboard</h1>
    <p>Esta é a página de acompanhamento de toda gestão de alunos.</p>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
						<div class="card">
    <div class="card-body">
        <h5 class="card-title">Total de Alunos</h5>
        <p class="card-text"><?php echo $total_alunos; ?></p>
    </div>
</div>
            </div>
            <div class="col-md-4">
						<div class="card">
    <div class="card-body">
        <h5 class="card-title">Total de Turmas</h5>
        <p class="card-text"><?php echo $total_turmas; ?></p>
    </div>
</div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Crianças com atendimento nutricional</h5>
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gráfico: Alunos por Turma</h5>
                    <canvas id="chartAlunosPorTurma"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('chartAlunosPorTurma').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php foreach ($alunos_por_turma as $turma) { echo "'" . $turma->nome_turma . "', "; } ?>], // Usando os nomes das turmas do banco de dados
            datasets: [{
                label: 'Alunos por Turma',
                data: [<?php foreach ($alunos_por_turma as $turma) { echo $turma->total_alunos . ", "; } ?>], // Usando o total de alunos por turma do banco de dados
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                    // Adicione mais cores conforme necessário
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                    // Adicione mais cores conforme necessário
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
 
</body>

</html>

