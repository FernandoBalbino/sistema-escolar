<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCursoRequest;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //


        $nome = !empty($request->query('nome')) ? $request->query('nome') : '';
        $descricao = !empty($request->query('descricao')) ? $request->query('descricao') : '';
        $status = strlen($request->query('status')) > 0 ? [$request->query('status')] : [0, 1];

        $cursos = Curso::where('nome', 'like', "%$nome%")->
            where('descricao', 'like', "%$descricao%")->whereIn('status', $status)->paginate(7);

        return view('curso.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
