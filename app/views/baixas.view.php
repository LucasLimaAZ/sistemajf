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
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title"><i class="fa fa-cart-arrow-down"></i> Dar Baixa em Produtos</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <table id="produtos" class="display responsive dataTable no-footer dtr-inline collapsed">
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
                                        <tr role="row">
                                            <input type="hidden" id="quantidade-<?=$produto->id;?>" value="<?=$produto->quantidade;?>">
                                            <input type="hidden" id="nome-<?=$produto->id;?>" value="<?=$produto->nome;?>">
                                            <input type="hidden" id="referencia-<?=$produto->id;?>" value="<?=$produto->referencia;?>">
                                            <input type="hidden" id="aplicacao-<?=$produto->id;?>" value="<?=$produto->aplicacao;?>">
                                            <td tabindex="0" class="sorting_1"><?=$produto->id;?></td>
                                            <td tabindex="1"><?=$produto->nome;?></td>
                                            <td tabindex="2"><?=$produto->referencia;?></td>
                                            <td tabindex="3"><?=$produto->aplicacao;?></td>
                                            <td tabindex="4">R$ <?=valor_centavos($produto->valor_custo);?></td>
                                            <td tabindex="5">R$ <?=valor_centavos($produto->valor_venda);?></td>
                                            <td tabindex="6"><?=$produto->data_entrada;?></td>
                                            <td tabindex="7">
                                                <span id="quantidade-atual-<?=$produto->id;?>"><?=$produto->quantidade;?></span> 
                                                <a id="<?=$produto->id;?>" href="javascript:void(0);" onclick="quantidade(this);">
                                                    <span class="adicionar-ao-estoque"><i class="fa fa-cart-arrow-down"></i></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>    

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
    </div>

</div>
<?php require 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/baixas.js"></script>