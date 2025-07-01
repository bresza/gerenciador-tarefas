<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Tarefas</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <h1>Gerenciador de Tarefas</h1>
  </header>

  <main class="container">
    @if(session('success'))
      <div class="alert-success">
        {{ session('success') }}
      </div>
    @endif

    @yield('content')
  </main>
</body>
</html>

