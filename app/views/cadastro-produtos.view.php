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

        <section class="cadastro-produtos-body">

            <div class="row">
                <form id="produto">
                    <div class="col-md-8 col-md-offset-2 white-box">
                        <h1 class="title"><i class="fa fa-shopping-cart"></i> Cadastro de Produtos</h1>

                        <div class="row pt-3">
                            <div class="col-md-4">
                                <label for="">Título:</label>
                                <input type="text" name="nome" id="nome-produto" class="form-control" placeholder="Nome da peça" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Referência:</label>
                                <input type="text" name="referencia" id="referencia-produto" class="form-control">
                                <span id="produto-existe" style="color:red;display:none;"> Um produto com o mesmo nome e referência já existe!</span>
                            </div>
                            <div class="col-md-4">
                                <label for="">Aplicação:</label>
                                <input type="text" name="aplicacao" class="form-control">
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-md-4">
                                <label for="">Valor de custo:</label>
                                <input type="text" name="valor_custo" id="valor_custo" class="form-control" data-thousands="." data-decimal="," data-prefix="R$ " required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Valor de venda:</label>
                                <input type="text" name="valor_venda" id="valor_venda" class="form-control" data-thousands="." data-decimal="," data-prefix="R$ " required>
                            </div>
                            <div class="col-md-2">
                                <label for="">Categoria:</label>
                                <select class="form-control" name="categoria">
                                    <option value="mecanica">Mecânica</option>
                                    <option value="acessorios">Acessórios</option>
                                    <option value="lubrificantes">Lubrificantes</option>
                                    <option value="quimicos">Químicos</option>
                                    <option value="parafusos">Parafusos / Porcas</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="quantidade">Quantidade:</label>
                                <input type="number" class="form-control" name="quantidade" placeholder="0" required>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-md-4" style="padding-top:24px;">
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                            </div>
                            <div class="col-md-4" style="padding-top:24px;">
                                <button class="btn btn-primary" id="botao-produto" type="submit" style="width:100%;">Cadastrar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </section>

    </div>

</div>
<?php require 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/cadastroProdutos.js"></script>