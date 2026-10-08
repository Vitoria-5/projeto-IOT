<div>
    <div class="mt-19">
        <form class="row g-19" wire:submit.prevent='store'>
            <div class="input-group mb-10">

                <div class="card text-center">
                    <div class="card-header">
                        Sensor
                    </div>
                    <div class="card-body">

                        <form class="row g-19">
                            <div class="col-md-10">
                                <label for="validationDefault01" class="form-label">Ambiente</label>
                                <input type="text" class="form-control" id="ambiente_id" value="" required>
                            </div>
                            <div class="col-md-10">
                                <label for="validationDefault02" class="form-label">Código</label>
                                <input type="text" class="form-control" id="codigo" value="" required>
                            </div>
                            <div class="col-md-10">
                                <label for="validationDefault02" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="tipo" value="" required>
                            </div>

                            <div class="col-md-10">
                                <label for="validationDefault03" class="form-label">Descrição</label>
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

