<div>
    <div>
        <form class="" wire:submit.prevent='store'>
            <div>

                <div class="card">
                    <div class="card-header">
                        Ambiente
                    </div>
                    <div class="card-body">

                        <form class="">
                            <div class="">
                                <label for="validationDefault01" class="form-label">Nome</label>
                                <input type="text" class="form-control" wire:model="nome" id="nome" value="" required>
                            </div>


                            <div class="">
                                <label for="validationDefault03" class="form-label">Descrição</label>
                                <input type="text" class="form-control" wire:model="descricao" id="descricao" required>
                            </div>
                            <div class="">
                                <label for="validationDefault02" class="form-label">Status</label>
                                <input type="text" class="form-control" wire:model="status" id="status" value="" required>
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
