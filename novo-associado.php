<h1>Cadastrar novo associado</h1>
<form  action="?page=salvarassociado" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano de afiliação</label>
        <input type="text" name="ano" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary"
        >Enviar</button>
    </div>
</form>

