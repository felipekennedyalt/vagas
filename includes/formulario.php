<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar vaga</h2>

    <form method="$_POST">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="titulo" id="">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea name="descricao" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control"><input type="radio" name="ativo" value="s" checked>Ativo</label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control"><input type="radio" name="ativo" value="n">Inativo</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success mt-3">Enviar</button>
        </div>
    </form>
</main>