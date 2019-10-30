var aviso = false;
var produtos;
$("#valor_custo").maskMoney();
$("#valor_venda").maskMoney();

$(document).ready(() => {

    $.get('buscar-produtos', response => {
        produtos = JSON.parse(response);
    });

});

$("#referencia-produto").change(() => {
    procurarAmbiguo();
});

$("#nome-produto").change(() => {
    procurarAmbiguo();
});

$("#produto").submit(() => {

    event.preventDefault();
    procurarAmbiguo();

    if(aviso){
        var r = confirm("Você tem certeza de que deseja cadastrar um produto já existente?");
        if(!r){
            return;
        }
    }

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
        //alert("Produto cadastrado com sucesso!");
        console.log("PRODUTOS ANTES: ",produtos);
        adicionarObjProduto();
        console.log("PRODUTOS DEPOIS: ",produtos);
        exibirSucesso();
        $("#valor_custo").maskMoney();
        $("#valor_venda").maskMoney();
    });

});

function exibirSucesso()
{
    $("#sucesso").fadeToggle(300);

        window.setTimeout(() => {

            $("#sucesso").fadeToggle(300);

    }, 1500);
}

function adicionarObjProduto()
{
    produtos.push({
        nome: $('#nome-produto').val(),
        referencia: $('#referencia-produto').val()
    });
}

function procurarAmbiguo()
{
    let busca = true;
    let nomeProduto = $('#nome-produto').val();
    let referenciaProduto = $('#referencia-produto').val();
    produtos.forEach(produto => {
        if(busca){
            console.log("ESTOU COMPARANDO O PRODUTO ", nomeProduto, " COM O PRODUTO ", produto.nome);
            if(nomeProduto.toUpperCase() == produto.nome.toUpperCase() && referenciaProduto.toUpperCase() == produto.referencia.toUpperCase()){
                $("#produto-existe").fadeIn(200);
                console.log("ENCONTREI AMBIGUOS");
                aviso = true;
                busca = false;
            }else{
                $("#produto-existe").fadeOut(200);
                aviso = false;
            }
        }
    });
}