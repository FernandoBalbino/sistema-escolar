<x-layout>
    <div class="container-fluid mt-4">

        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-semibold">Curso - Listar Cursos</h3>
            <a href="{{ route('curso.create') }}" class="btn btn-primary">
                Cadastrar Curso
            </a>
        </div>

        <!-- Filtros -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="get" action="{{ route('curso.index') }}" class="row g-3 align-items-end">

                    <div class="col-md-4">
                        <label class="form-label">Nome</label>
                        <input name="nome" type="text" class="form-control" placeholder="Nome do curso">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Descrição</label>
                        <input name="descricao" type="text" class="form-control" placeholder="Descrição do curso">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="">-</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>

                    <div class="col-md-2 d-flex gap-2">
                        <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
                        <button class="btn btn-danger w-100">Limpar</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Tabela -->
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Data de Cadastro</th>
                            <th>Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
    @forelse ($cursos as $curso)
        <tr>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->descricao }}</td>
            <td>{{ \Carbon\Carbon::parse($curso->dt_cadastro)->format('d/m/Y') }}</td>
            <td>
                @if ($curso->status)
                    <span class="badge bg-success">Ativo</span>
                @else
                    <span class="badge bg-danger">Inativo</span>
                @endif
            </td>
            <td class="text-center">
                <a href="{{ route('curso.show', $curso->id) }}">
                    View
                </a>

                <a href="{{ route('curso.edit', $curso->id) }}">
                    Editar
                </a>

                <form action="{{ route('curso.destroy', $curso->id) }}"
                      method="POST"
                      class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link p-0">
                        Deletar
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center text-muted">
                Nenhum curso encontrado
            </td>
        </tr>
    @endforelse
</tbody>

                </table>
            </div>
            <div>{{ $cursos->links() }}</div>
        </div>

    </div>
</x-layout>
