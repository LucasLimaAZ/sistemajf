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

        <section>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="white-box">
                        <table id="produtos" class="table-striped display nowrap dataTable dtr-inline collapsed">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Referência</th>
                                    <th>Aplicação</th>
                                    <th>Custo</th>
                                    <th>Valor de Venda</th>
                                    <th>Data de Entrada</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($produtos as $produto): ?>
                                <tr>
                                    <td><?=$produto->id;?></td>
                                    <td><?=$produto->nome;?></td>
                                    <td><?=$produto->referencia;?></td>
                                    <td><?=$produto->aplicacao;?></td>
                                    <td><?=$produto->valor_custo;?></td>
                                    <td><?=$produto->valor_venda;?></td>
                                    <td><?=$produto->data_entrada;?></td>
                                    <td><?=$produto->quantidade;?></td>
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
<script src="public/assets/js/produtos.js"></script>
<?php require 'app/views/partials/footer.php'; ?>