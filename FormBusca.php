<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).on('click','#buscar', function(){
        const cep = $("#cep").val();
        $.ajax({
            type: "get",
            url: `https://viacep.com.br/ws/${cep}/json/`,
            success: function(data){
                const conteudo = '';
                conteudo += `<p>Logradouro: ${data.logradouro}</p>`;
                conteudo += `<p>Bairro: ${data.bairro}</p>`;
                conteudo += `<p>Cidade: ${data.localidade}</p>`;
                conteudo += `<p>Estado: ${data.uf}</p>`;

                $("#dados").append(conteudo);
            }
        });
    });
</script>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">Cep: </label>
            <input type="text" class="form-control" id="cep">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <button id="buscar" class="btn btn-primary btn-block">Buscar</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <div class="dados"></div>
        </div>
    </div>
</div>