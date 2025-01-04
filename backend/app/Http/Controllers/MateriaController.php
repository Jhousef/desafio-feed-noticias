<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Materia();
    }

    public function index(Request $request)
    {
        $data = $this->model->select('id', 'titulo', 'descricao', 'imagem', 'data_de_publicacao')->paginate(6);
        return response()->json($data);
    }

    public function show($id)
    {
        $materia = $this->model->find($id);

        if(!$materia) {
            return response()->json(['error' => 'matéria nã encontrada'], 404);
        }

        return response()->json($materia);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'texto_completo' => 'required|string',
            'imagem' => 'required|string',
            'data_de_publicacao' => 'required|date',
        ], [
            'titulo.required' => 'O campo título é obrigatório.',
            'titulo.string' => 'O campo título deve ser uma string.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'texto_completo.required' => 'O campo texto completo é obrigatório.',
            'imagem.required' => 'O campo imagem é obrigatório.',
            'imagem.string' => 'O campo imagem deve ser uma string.',
            'data_de_publicacao.required' => 'O campo data de publicacao é obrigatório.',
            'data_de_publicacao.date' => 'O campo data de publicacao deve ser uma data válida.',
        ]);

        $materia = Materia::create($data);

        return response()->json($materia, 201);
    }

    public function update(Request $request, $id)
    {
        $materia = $this->model->find($id);

        $data = $request->validate([
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'texto_completo' => 'required|string',
            'imagem' => 'required|string',
            'data_de_publicacao' => 'required|date',
        ], [
            'titulo.required' => 'O campo título é obrigatório.',
            'titulo.string' => 'O campo título deve ser uma string.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'texto_completo.required' => 'O campo texto completo é obrigatório.',
            'imagem.required' => 'O campo imagem é obrigatório.',
            'imagem.string' => 'O campo imagem deve ser uma string.',
            'data_de_publicacao.required' => 'O campo data de publicacao é obrigatório.',
            'data_de_publicacao.date' => 'O campo data de publicacao deve ser uma data válida.',
        ]);

        $materia->update($data);

        return response()->json($materia, 200);
    }

    public function destroy($id)
    {
        $materia = $this->model->find($id);
        if(!$materia){
            return response()->json(['error' => 'matéria não existe']);
        }

        $materia->delete();
        return response()->json(null, 204);
    }
}
