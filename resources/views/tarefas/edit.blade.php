@extends('layouts.app')
<!-- Código para editar as tarefas usando a mesma lógica do de criação -->
@section('content')
<h1>Editar Tarefa #{{ $tarefa->id }}</h1>
<form action="{{ route('tarefas.update', $tarefa) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ old('titulo',$tarefa->titulo) }}">
    @error('titulo') <div class="text-danger">{{ $message }}</div> @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control">{{ old('descricao',$tarefa->descricao) }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
      <option value="pendente" @selected(old('status',$tarefa->status)=='pendente')>Pendente</option>
      <option value="concluida" @selected(old('status',$tarefa->status)=='concluida')>Concluída</option>
    </select>
  </div>
  <button class="btn btn-primary">Atualizar</button>
  <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
