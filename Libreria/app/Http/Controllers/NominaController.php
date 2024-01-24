<?php

namespace App\Http\Controllers;

use App\Models\Nomina;
use App\Models\Empleado;
use App\Models\Convenio;
use Illuminate\Http\Request;

/**
 * Class NominaController
 * @package App\Http\Controllers
 */
class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominas = Nomina::paginate();

        return view('nomina.index', compact('nominas'))
            ->with('i', (request()->input('page', 1) - 1) * $nominas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nomina = new Nomina();
        $empleado = Empleado::pluck("nombre","id");
        $convenio = Convenio::pluck("nombre","id");

        return view('nomina.create', compact('nomina','convenio','empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nomina::$rules);

        $nomina = Nomina::create($request->all());

        return redirect()->route('nominas.index')
            ->with('success', 'Nomina created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nomina = Nomina::find($id);

        return view('nomina.show', compact('nomina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nomina = Nomina::find($id);
        $empleado = Empleado::pluck("nombre","id");
        $convenio = Convenio::pluck("nombre","id");
        return view('nomina.edit', compact('nomina','convenio','empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nomina $nomina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nomina $nomina)
    {
        request()->validate(Nomina::$rules);

        $nomina->update($request->all());

        return redirect()->route('nominas.index')
            ->with('success', 'Nomina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nomina = Nomina::find($id)->delete();

        return redirect()->route('nominas.index')
            ->with('success', 'Nomina deleted successfully');
    }
}
