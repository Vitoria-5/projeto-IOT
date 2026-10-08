<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Lista de Sensores</h3>
        <a href="/sensors/create" class="btn btn-primary">Novo Lugar</a>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-3">
        <input type="text"
            class="form-control"
            placeholder="Buscar sensor..."
            wire:model.live="search">
    </div>



    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>ID do ambiente</th>
                <th>Código</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>status</th>

            </tr>
        </thead>

        <tbody>
            @forelse($sensors as $sensor)
            <tr>
                <td>{{ $sensor->ambiente_id }}</td>
                <td>{{ $sensor->codigo }}</td>
                <td>{{ $sensor->tipo }}</td>
                <td>{{ $sensor->descricao }}</td>
                <td>{{ $sensor->status }}</td>


                <td>
                    <a href="/sensors/edit/{{ $sensor->id }}" class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <button class="btn btn-danger btn-sm"
                        wire:click="delete({{ $sensor->id }})">
                        Excluir
                    </button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">
                    Nenhum produto encontrado
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>

</div>
