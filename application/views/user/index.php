<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">LISTA DE ADMINISTRADORES</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
						<th>Nº</th>
						<th>Nome de Usuário</th>
						<th>E-mail</th>
						<th>Celular</th>
						<th>Endereço</th>
						<th>Opções</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($users as $row) { ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['mobile']?></td>
                            <td><?=$row['address']?></td>
                            <td>
                                <a href="<?=base_url()?>user/edit/<?=$row['id']?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="<?=base_url()?>user/delete/<?=$row['id']?>" onclick="return confirm('Are you sure want to delete this user ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                       Adicionado com sucesso
                    </div>
                <?php }
                ?>
                <?php
                if ($this->session->flashdata('deleted')) { ?>
                    <div class="alert alert-success" role="alert">
                       Deletado com sucesso
                    </div>
                <?php }
                ?>
                 <?php
                if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        falhou
                    </div>
                <?php }
                ?>

            </div>
        </div>
    </div>
</div>

</main>
  </div>
</div>
<?php $this->load->view('includes/footer'); ?>
