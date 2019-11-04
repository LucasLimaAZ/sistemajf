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

                        <h1 class="title"><i class="fa fa-cart-plus"></i> Acrescentar Produto ao Estoque</h1>

                        <table id="produtos" class="display responsive table table-striped">
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
                                    <input type="hidden" id="quantidade-<?=$produto->id;?>" value="<?=$produto->quantidade;?>">
                                    <td><?=$produto->id;?></td>
                                    <td><?=$produto->nome;?></td>
                                    <td><?=$produto->referencia;?></td>
                                    <td><?=$produto->aplicacao;?></td>
                                    <td>R$ <?=valor_centavos($produto->valor_custo);?></td>
                                    <td>R$ <?=valor_centavos($produto->valor_venda);?></td>
                                    <td><?=$produto->data_entrada;?></td>
                                    <td><span id="quantidade-atual-<?=$produto->id;?>"><?=$produto->quantidade;?></span> <a id="<?=$produto->id;?>" href="javascript:void(0);" onclick="quantidade(this);"><i class="fa fa-plus adicionar-ao-estoque"></i></a></td>
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
<script src="public/assets/js/produtos.js"></script>