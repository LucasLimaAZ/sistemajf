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

    $('#baixas').DataTable({
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

function quantidade(e)
{

    let id = e.id;
    let quantidadeAtual = $(`#quantidade-${id}`).val();
    let produto_nome = $(`#nome-${id}`).val();
    let produto_referencia = $(`#referencia-${id}`).val();
    let produto_aplicacao = $(`#aplicacao-${id}`).val();
    let quantidade = prompt("Por favor insira quantas unidades deste produto foram vendidas:");
    let novaQuantidade = parseInt(quantidadeAtual) - parseInt(quantidade);

    if(quantidade != null){

        if(novaQuantidade < 0){

            alert("Você não pode dar baixa em mais produtos do que você tem!");
            return;

        }else{
            let quantidadeAtual = $(`#quantidade-${id}`).val(novaQuantidade);

            $(`#quantidade-atual-${id}`).html(novaQuantidade);

            let dados = {
                id:id, 
                quantidade:novaQuantidade
            };
    
            $.post('atualiza-produto', dados, response => {
                console.log("Produto atualizado: ",response);
            });

            let dadosBaixa = {
                id:id, 
                quantidade:novaQuantidade,
                produto_nome:produto_nome, 
                produto_referencia:produto_referencia, 
                produto_aplicacao:produto_aplicacao
            };
            
            registrarBaixa(dadosBaixa, quantidade);
        }

    }

};

function registrarBaixa(dadosBaixa, quantidade)
{
    let baixa = {
        produto_id:dadosBaixa.id, 
        produto_nome:dadosBaixa.produto_nome, 
        produto_referencia:dadosBaixa.produto_referencia, 
        produto_aplicacao:dadosBaixa.produto_aplicacao, 
        quantidade:quantidade
    };
    
    $.post('registrar-baixa', baixa, response => {
        console.log("Baixa registrada: ", response);
    });
}