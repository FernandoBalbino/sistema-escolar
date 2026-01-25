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
                <div class="row g-3 align-items-end">

                    <div class="col-md-4">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do curso">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Descrição</label>
                        <input type="text" class="form-control" placeholder="Descrição do curso">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option>-</option>
                            <option>Ativo</option>
                            <option>Inativo</option>
                        </select>
                    </div>

                    <div class="col-md-2 d-flex gap-2">
                        <button class="btn btn-primary w-100">Pesquisar</button>
                        <button class="btn btn-danger w-100">Limpar</button>
                    </div>

                </div>
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

                        <tr>
                            <td>Curso de Matemática</td>
                            <td>Curso de Matemática para iniciantes</td>
                            <td>06/09/2025</td>
                            <td>
                                <span class="badge bg-success">Ativo</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary">View</button>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Curso de Português</td>
                            <td>Introdução à gramática</td>
                            <td>10/09/2025</td>
                            <td>
                                <span class="badge bg-success">Ativo</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary">View</button>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layout>
