<form id="form" action="">
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="data_registro">Data</label>
            <input id="data_registro" type="text" value="<?php echo date("d/m/Y"); ?>" class="form-control" disabled>
        </div>
        <div class="col-md-6 form-group">
            <label for="num_comanda">Comanda</label>
            <input id="num_comanda" type="number" class="form-control" placeholder="1">
        </div>
        <div class="col-md-12 form-group">
            <label for="produto">Produto</label>
            <input id="produto" type="text" class="form-control" placeholder="Cerveja xpto 350ml">
        </div>
        <div class="col-md-6 form-group">
            <label for="quantidade">Quantidade</label>
            <input id="quantidade" type="number" class="form-control" placeholder="1">
        </div>
        <div class="col-md-6 form-group">
            <label for="preco_unitario">Preço Unitário R$</label>
            <input id="preco_unitario" type="text" class="form-control" placeholder="25,00">
        </div>
        <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-primary">Adicionar</button>
            <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
        </div>
    </div>
</form>