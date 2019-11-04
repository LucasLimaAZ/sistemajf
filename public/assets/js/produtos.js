$(document).ready(() => {

    $('#produtos').DataTable({
        responsive:true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 3, targets: 1 },
            { responsivePriority: 2, targets: -1 }
        ],
        "language":{
            "sEmptyTable": "Nenhum produto encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ produtos",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 produtos",
            "sInfoFiltered": "(Filtrados de _MAX_ produtos)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Produtos por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum produto encontrado",
            "sSearch": "Pesquisar:",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });

});

$(".fechar").click(() => {
    $('#ver-mais').hide();
});

$("#atualiza-produto").submit(() => {

    event.preventDefault();

    $("#editar-custo").val($("#editar-custo").val().replace(".", ""));
    $("#editar-valor_venda").val($("#editar-valor_venda").val().replace(".", ""));
    $("#editar-custo").val($("#editar-custo").val().replace(",", "."));
    $("#editar-valor_venda").val($("#editar-valor_venda").val().replace(",", "."));
    $("#editar-custo").val($("#editar-custo").val().replace("R$ ", ""));
    $("#editar-valor_venda").val($("#editar-valor_venda").val().replace("R$ ", ""));

    let dados = $("#atualiza-produto").serialize();
    let id = $("#editar-id").val();

    $.post('atualiza-produto', dados, response => {
        console.log(JSON.parse(response));
    })
    .always(() => {
        $("#ver-mais").hide();
    })
    .done(() => {
        $(`#id-${id}`).html($("#editar-id").val());
        $(`#nome-${id}`).html($("#editar-nome").val());
        $(`#html-categoria-${id}`).html($("#editar-categoria").val());
        $(`#referencia-${id}`).html($("#editar-referencia").val());
        $(`#aplicacao-${id}`).html($("#editar-aplicacao").val());
        $(`#valor_custo-${id}`).html($("#editar-custo").val());
        $(`#valor_venda-${id}`).html($("#editar-valor_venda").val());
        $(`#data_entrada-${id}`).html($("#editar-data_entrada").val());
        $(`#html-quantidade-${id}`).html($("#editar-quantidade").val());
    })
    .fail(() => {
        alert("Ocorreu um erro, se persistir contate o suporte!");
    });

});

function quantidade(e)
{

    let id = e.id;
    let quantidadeAtual = $(`#quantidade-${id}`).val();
    let quantidade = prompt("Por favor insira quantas unidades deseja acrescentar:");
    let novaQuantidade = parseInt(quantidadeAtual) + parseInt(quantidade);

    if(quantidade != null){
        $(`#quantidade-atual-${id}`).html(novaQuantidade);
        let dados = {id:id, quantidade:novaQuantidade};

        $.post('atualiza-produto', dados, response => {
            console.log(response);
        });
    }

};

function editar(e)
{
    $("#ver-mais").show();
    let id = e.id;

    $("#editar-id").val($(`#id-${id}`).html());
    $("#editar-nome").val($(`#nome-${id}`).html());
    $("#editar-categoria").val($(`#categoria-${id}`).val());
    $("#editar-referencia").val($(`#referencia-${id}`).html());
    $("#editar-aplicacao").val($(`#aplicacao-${id}`).html());
    $("#editar-custo").val($(`#valor_custo-${id}`).val().replace(".", ","));
    $("#editar-valor_venda").val($(`#valor_venda-${id}`).val().replace(".", ","));
    $("#editar-data_entrada").val($(`#data_entrada-${id}`).html());
    $("#editar-quantidade").val($(`#quantidade-${id}`).val());
}

$("#deletar-produto").click(() => {

    $("#ver-mais").show();

    let confirmacao = confirm("Você tem certeza que deseja deletar este produto?");

    if(confirmacao){
        let id = parseInt($("#editar-id").val());
        let produto = {id: id};

        console.log(produto);

        $.post('deletar-produto', produto, response => {
            console.log(response);
        })
        .done(() => {
            $("#ver-mais").hide();
            $(`#produto-${id}`).fadeOut(300);
        })
        .fail(() => {
            alert("Ocorreu um erro, se persistir por favor contatar o suporte.");
        });
    }

});