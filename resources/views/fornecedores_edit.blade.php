<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Fornecedor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">✏️ Editar Fornecedor</h2>

        <form action="/fornecedores/{{ $fornecedor->id }}" method="POST" class="card p-4 shadow-sm bg-white">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $fornecedor->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="razao_social" class="form-label">Razão Social</label>
                <input type="text" id="razao_social" name="razao_social" class="form-control" value="{{ $fornecedor->razao_social }}" required>
            </div>

            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" id="cnpj" name="cnpj" class="form-control" value="{{ $fornecedor->cnpj }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="/fornecedores" class="btn btn-secondary">← Cancelar</a>
                <button type="submit" class="btn btn-primary">💾 Atualizar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
