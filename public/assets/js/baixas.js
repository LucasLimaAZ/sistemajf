$(document).ready(() => {

    $('#produtos').DataTable({
        responsive:true,
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

function quantidade(e){

    let id = e.id;
    let quantidadeAtual = $(`#quantidade-${id}`).val();
    let quantidade = prompt("Por favor insira quantas unidades deste produto foram vendidas:");
    let novaQuantidade = parseInt(quantidadeAtual) - parseInt(quantidade);

    if(quantidade != null){

        if(novaQuantidade < 0){
            alert("Você não pode dar baixa em mais produtos do que você tem!");
            return;
        }else{
            let quantidadeAtual = $(`#quantidade-${id}`).val(novaQuantidade);

            $(`#quantidade-atual-${id}`).html(novaQuantidade);
            let dados = {id:id, quantidade:novaQuantidade};
    
            $.post('atualiza-produto', dados, response => {
                console.log(response);
            });
        }

    }

};