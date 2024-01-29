<h1>Cadastrar nova anuidade</h1>
<form  action="?page=salvaranuidade" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Ano</label>
        <input type="text" name="anoref" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor da anuidade</label>
        <input type="number" name="valor" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary"
        >Enviar</button>
    </div>
</form>