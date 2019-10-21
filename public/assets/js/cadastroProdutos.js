$(document).ready(() => {

    $.get('buscar-produtos', response => {

        let produtos = JSON.parse(response);

        $("#nome-produto").change(() => {
            let busca = true;
            let nomeProduto = $('#nome-produto').val();
            produtos.forEach(produto => {
                if(busca){
                    if(nomeProduto.toUpperCase() == produto.nome.toUpperCase()){
                        $("#produto-existe").show(200);
                        busca = false;
                    }else{
                        $("#produto-existe").hide(200);
                    }
                }
            });
        });

    });

});

$("#produto").submit(() => {

    event.preventDefault();

    let dados = $("#produto").serialize();
    console.log(dados);

    $.post('cadastrar-produto', dados, response => {
        console.log(response);
    })
    .done(() => {
        alert("Produto cadastrado com sucesso!");
    });

});