<?php

require_once "cabecalho.php";

?>

<h2>Editar Produtos</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Objeto</option>
            <option>Criatura Mitológica</option>
            <option>Especiaria</option>
            <option>Extra-terrestre</option>
            <option>Criatura Abissal</option>
            <option>Membro Corpóreo</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>

</form>

<?php

require_once "rodape.php";

?>