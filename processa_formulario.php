<!-- ... seu código HTML existente ... -->
<button type="button" onclick="validarFormulario()">Enviar</button>
<script src="index.js"></script>
<script>
    function validarFormulario() {
        // ... validação existente ...

        // Adicione aqui a lógica para enviar os dados para o PHP
        enviarDadosParaPHP(email, senha);
    }

    function enviarDadosParaPHP(email, senha) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'processo_formulario.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert(xhr.responseText);
            }
        };

        var dados = 'email=' + encodeURIComponent(email) + '&senha=' + encodeURIComponent(senha);
        xhr.send(dados);
    }
</script>
<!-- ... -->
