<?php require 'app/views/partials/header.php'; ?>
<div class="wrapper">

    <?php require 'app/views/partials/navbar.php'; ?>
    <?php require 'app/views/partials/sidebar.php'; ?>

    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Painel
                <small>de administração</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Sistema</a></li>
                <li class="active">Painel</li>
            </ol>
        </section>

        <section class="tabela-produtos" style="padding-top:30px;">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="white-box">

                        <h1 class="title"><i class="fa fa-bar-chart"></i> Listar Baixas</h1>

                        <table id="baixas" class="display responsive table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Produto Id</th>
                                    <th>Nome</th>
                                    <th>Referência</th>
                                    <th>Aplicação</th>
                                    <th>Quantidade</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($baixas as $baixa): ?>
                                <tr role="row">
                                    <td><?=$baixa->id;?></td>
                                    <td><?=$baixa->produto_id;?></td>
                                    <td><?=$baixa->produto_nome;?></td>
                                    <td><?=$baixa->produto_referencia;?></td>
                                    <td><?=$baixa->produto_aplicacao;?></td>
                                    <td><?=$baixa->quantidade;?></td>
                                    <td><?=$baixa->data;?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            
        </section>
        
    </div>

</div>

<?php require 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/baixas.js"></script>