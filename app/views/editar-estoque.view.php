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

        <section class="tabela-produtos" style="margin-top:30px;">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="white-box">

                        <h1 class="title"><i class="fa fa-edit"></i> Editar Estoque</h1>

                        <table id="produtos" class="display responsive table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                    <th>Referência</th>
                                    <th>Aplicação</th>
                                    <th>Custo</th>
                                    <th>Valor de Venda</th>
                                    <th>Data de Entrada</th>
                                    <th>Quantidade</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($produtos as $produto): ?>
                                <tr id="produto-<?=$produto->id;?>">
                                    <input type="hidden" id="quantidade-<?=$produto->id;?>" value="<?=$produto->quantidade;?>">
                                    <input type="hidden" id="categoria-<?=$produto->id;?>" value="<?=$produto->categoria;?>">
                                    <input type="hidden" id="valor_custo-<?=$produto->id;?>" value="<?=$produto->valor_custo;?>">
                                    <input type="hidden" id="valor_venda-<?=$produto->id;?>" value="<?=$produto->valor_venda;?>">
                                    <td tabindex="0" id="id-<?=$produto->id;?>"><?=$produto->id;?></td>
                                    <td tabindex="1" id="nome-<?=$produto->id;?>"><?=$produto->nome;?></td>
                                    <td tabindex="2" id="html-categoria-<?=$produto->id;?>"><?=categoria($produto->categoria);?></td>
                                    <td tabindex="3" id="referencia-<?=$produto->id;?>"><?=$produto->referencia;?></td>
                                    <td tabindex="4" id="aplicacao-<?=$produto->id;?>"><?=$produto->aplicacao;?></td>
                                    <td tabindex="5" id="table-valor_custo-<?=$produto->id;?>" >R$ <?=valor_centavos($produto->valor_custo);?></td>
                                    <td tabindex="6" id="table-valor_venda-<?=$produto->id;?>">R$ <?=valor_centavos($produto->valor_venda);?></td>
                                    <td tabindex="7" id="data_entrada-<?=$produto->id;?>"><?=$produto->data_entrada;?></td>
                                    <td tabindex="8" id="html-quantidade-<?=$produto->id;?>"><?=$produto->quantidade;?></td>
                                    <td tabindex="9"><span id="<?=$produto->id;?>" onclick="editar(this);" class="botao-editar"><i class="fa fa-edit"></i></span></td>
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

<?php require 'app/views/partials/editar-produto-modal.php'; ?>
<?php require 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/produtos.js"></script>