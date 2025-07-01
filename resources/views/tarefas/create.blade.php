@extends('layouts.app')

@section('content')
<h1>Nova Tarefa</h1><!-- definição de como a tarefa vai ser criada-->
<form action="{{ route('tarefas.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label class="form-label">Título</label><!-- Nome dado a tarefa -->
    <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}">
    @error('titulo') <div class="text-danger">{{ $message }}</div> @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Descrição</label><!-- campo de preenchimento da descrição da tarefa -->
    <textarea name="descricao" class="form-control">{{ old('descricao') }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Status</label><!-- Acampo de seleção do status da tarefa -->
    <select name="status" class="form-select">
      <option value="pendente" @selected(old('status')=='pendente')>Pendente</option>
      <option value="concluida" @selected(old('status')=='concluida')>Concluída</option>
    </select>
  </div>
  <!-- os botões de salvar e voltar na tela de criação da tarefa -->
  <button class="btn btn-success">Salvar</button>
  <a href="{{ route('tarefas.index') }}" class="btn btn-primary">Voltar</a>
</form>
@endsection
