$(document).ready(function() {
    $("#form-eventos button").on('click', function() {
        if ($("#form-eventos #nome").val() == "") {
            alert("O campo nome é obrigatório!");
            $("#form-eventos #nome").focus();
        }
        else if ($("#form-eventos #local").val() == "") {
            alert("O campo local é obrigatório!");
            $("#form-eventos #local").focus();
        }
        else if ($("#form-eventos #descricao").val() == "") {
            alert("O campo descricao é obrigatório!");
            $("#form-eventos #descricao").focus();
        }
        else if ($("#form-eventos #modalidade").val() == "") {
            alert("O campo modalidade é obrigatório!");
            $("#form-eventos #modalidade").focus();
        }
        else {
            $("#form-eventos").submit();
        }
    });
});