<?php

namespace App\Http\Controllers;

use App\Models\Descanso;
use Illuminate\Http\Request;

/**
 * Class DescansoController
 * @package App\Http\Controllers
 */
class DescansoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descansos = Descanso::paginate();

        return view('descanso.index', compact('descansos'))
            ->with('i', (request()->input('page', 1) - 1) * $descansos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descanso = new Descanso();
        return view('descanso.create', compact('descanso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Descanso::$rules);

        $descanso = Descanso::create($request->all());

        return redirect()->route('descansos.index')
            ->with('success', 'Descanso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descanso = Descanso::find($id);

        return view('descanso.show', compact('descanso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $descanso = Descanso::find($id);

        return view('descanso.edit', compact('descanso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Descanso $descanso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descanso $descanso)
    {
        request()->validate(Descanso::$rules);

        $descanso->update($request->all());

        return redirect()->route('descansos.index')
            ->with('success', 'Descanso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $descanso = Descanso::find($id)->delete();

        return redirect()->route('descansos.index')
            ->with('success', 'Descanso deleted successfully');
    }
}
