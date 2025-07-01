<?php
//Controlador responsável pelas operações CRUD
namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {//Exibição da listagem de tarefas
        $tarefas = Tarefa::orderBy('created_at','desc')->get();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {//mostra o formulario de criação de uma nova tarefa
        return view('tarefas.create');
    }

    public function store(Request $r)
    {//valida os dados e salva a tarefa
        $data = $r->validate([
          'titulo'    => 'required|max:255',
          'descricao' => 'nullable',
          'status'    => 'required|in:pendente,concluida',
        ]);
        Tarefa::create($data);
        return redirect()->route('tarefas.index');
    }

    public function edit(Tarefa $tarefa)
    {//exibe o formulario de edição da tarefa
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $r, Tarefa $tarefa)
    {//valida os dados e salva no banco
        $data = $r->validate([
          'titulo'    => 'required|max:255',
          'descricao' => 'nullable',
          'status'    => 'required|in:pendente,concluida',
        ]);

        $tarefa->update($data);
        return redirect()->route('tarefas.index');
    }

    public function destroy(Tarefa $tarefa)
    {//remove a tarefa desejada do banco
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}

