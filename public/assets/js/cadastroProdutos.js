$("#valor_custo").maskMoney();
$("#valor_venda").maskMoney();

$(document).ready(() => {

    $.get('buscar-produtos', response => {

        let produtos = JSON.parse(response);

        $("#referencia-produto").change(() => {
            let busca = true;
            let nomeProduto = $('#nome-produto').val();
            let referenciaProduto = $('#referencia-produto').val();
            produtos.forEach(produto => {
                if(busca){
                    if(nomeProduto.toUpperCase() == produto.nome.toUpperCase() && referenciaProduto.toUpperCase() == produto.referencia.toUpperCase()){
                        $("#produto-existe").fadeIn(200);
                        busca = false;
                    }else{
                        $("#produto-existe").fadeOut(200);
                    }
                }
            });
        });

        $("#nome-produto").change(() => {
            let busca = true;
            let nomeProduto = $('#nome-produto').val();
            let referenciaProduto = $('#referencia-produto').val();
            produtos.forEach(produto => {
                if(busca){
                    if(nomeProduto.toUpperCase() == produto.nome.toUpperCase() && referenciaProduto.toUpperCase() == produto.referencia.toUpperCase()){
                        $("#produto-existe").fadeIn(200);
                        busca = false;
                    }else{
                        $("#produto-existe").fadeOut(200);
                    }
                }
            });
        });

    });

});

$("#produto").submit(() => {

    event.preventDefault();

    $("#valor_custo").val($("#valor_custo").val().replace(".", ""));
    $("#valor_venda").val($("#valor_venda").val().replace(".", ""));
    $("#valor_custo").val($("#valor_custo").val().replace(",", "."));
    $("#valor_venda").val($("#valor_venda").val().replace(",", "."));
    $("#valor_custo").val($("#valor_custo").val().replace("R$ ", ""));
    $("#valor_venda").val($("#valor_venda").val().replace("R$ ", ""));

    let dados = $("#produto").serialize();

    $.post('cadastrar-produto', dados, response => {
        console.log(response);
    })
    .done(() => {
        alert("Produto cadastrado com sucesso!");
    });

});