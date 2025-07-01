@extends('layouts.app')

@section('content')
<h1>Lista de Tarefas</h1>
<a href="{{ route('tarefas.create') }}" class="btn btn-primary mb-3">+ Nova</a>{{-- Botão que leva ao formulário de criação de nova tarefa --}}
<table class="table table-striped">{{-- Tabela que mostra as tarefas cadastradas --}}
  <thead>{{-- Cabeçalho da tabela --}}
    <tr><th>#</th><th>Título</th><th>Status</th><th>Ações</th></tr>
  </thead>
  <tbody>
    @forelse($tarefas as $t)
      <tr>
        <td>{{ $t->id }}</td>
        <td>{{ $t->titulo }}</td>
        <td>{{ ucfirst($t->status) }}</td>
        <td>{{-- Link para editar essa tarefa --}}
          <a href="{{ route('tarefas.edit', $t) }}" class="btn btn-sm btn-warning">Editar</a>
          <form action="{{ route('tarefas.destroy', $t) }}" method="POST" class="d-inline"> {{-- Formulário para excluir a tarefa --}}
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger">Excluir</button>
          </form>
        </td>
      </tr>
    @empty{{-- Caso não existam tarefas cadastradas --}}
      <tr><td colspan="4">Nenhuma tarefa.</td></tr>
    @endforelse
  </tbody>
</table>
@endsection
