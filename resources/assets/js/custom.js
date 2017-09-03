$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$('.confirmacao').on('click', function () {
    return confirm('Tem certeza de que prosseguir com a exclusão do contato?');
});

$('.confirmacao-telefone').on('click', function () {
    return confirm('Tem certeza de que prosseguir com a exclusão do telefone?');
});