<div class="escondido popup " id="ver-mais">
    <div class="row popup-content">
        <div class="col-md-8 col-md-offset-3">

            <div class="white-box">

                <h1 class="title"><i class="fa fa-edit"></i> Editar Produto</h1>

                <form id="atualiza-produto">

                    <div class="row pt-3">
                        <div class="col-md-3">
                            <input id="editar-id" name="id" type="hidden">
                            <label for="nome">Título:</label>
                            <input id="editar-nome" name="nome" class="form-control" type="text">
                        </div>
                        <div class="col-md-3">
                            <label for="categoria">Categoria:</label>
                            <select id="editar-categoria" name="categoria" class="form-control">
                                <option value="mecanica">Mecânica</option>
                                <option value="acessorios">Acessórios</option>
                                <option value="lubrificantes">Lubrificantes</option>
                                <option value="quimicos">Químicos</option>
                                <option value="parafusos">Parafusos / Porcas</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="referencia">Referência:</label>
                            <input id="editar-referencia" name="referencia" class="form-control" type="text">
                        </div>
                        <div class="col-md-3">
                            <label for="aplicacao">Aplicação:</label>
                            <input id="editar-aplicacao" name="aplicacao" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-md-3">
                            <label for="custo">Custo:</label>
                            <input id="editar-custo" name="valor_custo" class="form-control" type="text" data-thousands="." data-decimal="," data-prefix="R$ ">
                        </div>
                        <div class="col-md-3">
                            <label for="valor_venda">Valor de Venda:</label>
                            <input id="editar-valor_venda" name="valor_venda" class="form-control" type="text" data-thousands="." data-decimal="," data-prefix="R$ ">
                        </div>
                        <div class="col-md-3">
                            <label for="data_entrada">Data de Entrada:</label>
                            <input id="editar-data_entrada" name="data_entrada" class="form-control" type="text">
                        </div>
                        <div class="col-md-3">
                            <label for="quantidade">Quantidade:</label>
                            <input id="editar-quantidade" name="quantidade" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row pt-3" style="text-align:center;">
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Salvar</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" id="deletar-produto" class="btn btn-danger"><i class="fa fa-trash"></i> Deletar</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary fechar"><i class="fa fa-times"></i> Cancelar</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>