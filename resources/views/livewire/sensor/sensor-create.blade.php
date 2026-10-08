<div>
    <div>
        <form class="" wire:submit.prevent='store'>
            <div>

                <div class="card">
                    <div class="card-header">
                        Sensor
                    </div>
                    <div class="card-body">

                        <form class="">
                            <div class="">
                                <label for="ambiente_id" class="form-label">Ambiente</label>
                                <input type="text" class="form-control" id="ambiente_id" value="" required>
                            </div>
                            <div class="">
                                <label for="codigo" class="form-label">Código</label>
                                <input type="text" class="form-control" id="codigo" value="" required>
                            </div>
                            <div class="">
                                <label for="tipo" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="tipo" value="" required>
                            </div>

                            <div class="">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="descricao" required>
                            </div>

                            <h5>Status</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="status">
                                <label class="form-check-label" for="status">
                                    Ativo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="status"
                                    checked>
                                <label class="form-check-label" for="status">
                                    Inativo
                                </label>
                            </div>
                            <br>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer text-body-secondary">
                        2 days ago
                    </div>
                </div>







            </div>
    </div>
