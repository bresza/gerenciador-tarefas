<!DOCTYPE html>
<html lang="pt-BR">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Tarefas</title> <!--título que aparece no navegador-->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!-- Importa o arquivo de estilos gerado em public/css/app.css -->
</head>
<body><!-- Cabeçalho fixo do site -->
  <header> <!-- Título principal mostrado no topo -->
    <h1>Gerenciador de Tarefas</h1>
  </header>

  <main class="container"><!-- Conteúdo principal centralizado -->
    @if(session('success'))
      <div class="alert-success">
        {{ session('success') }}
      </div>
    @endif

    @yield('content')<!-- Aqui será injetado o conteúdo específico de cada view -->
  </main>
</body>
</html>

