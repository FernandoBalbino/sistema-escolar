<x-layout>
    <div class="container-fluid mt-4">

        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-semibold">Curso - Cadastrar Cursos</h3>
            <a href="{{ route('curso.index') }}" class="btn btn-primary">
                Listar Cursos
            </a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <!-- Filtros -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="post" action="{{ route('curso.store') }}" class="row g-3 align-items-end">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Nome</label>
                        <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome do curso" value="{{ old('nome') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Descrição</label>
                        <input id="descricao" name="descricao" type="text" class="form-control" placeholder="Descrição do curso" value="{{ old('descricao') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Valor</label>
                        <input id="preco" name="preco" type="text" class="form-control" placeholder="Valor do curso" value="{{ old(key: 'preco') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Observação</label>
                        <textarea id="observacao" name="observacao" class="form-control" placeholder="Observação do curso">{{ old('observacao') }}</textarea>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Status</label>
                        <select name="status"  class="form-select">

                            <option value="1" @selected(old('status') == '1')>Ativo</option>
                            <option value="0" @selected(old('status') == '0')>Inativo</option>
                        </select>
                    </div>

                    <div class="col-md-2 d-flex gap-2">
                        <button type="submit" class="btn btn-primary w-100">Salvar</button>

                    </div>

                </form>
            </div>
        </div>

        <!-- Tabela -->


    </div>
</x-layout>
