$("#botao-produto").click(() => {
    let dados = $("#produto").serialize();
    console.log(dados);

    $.post('cadastrar-produto', dados, response => {
        console.log(response);
    });
});