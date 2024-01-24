<?php

namespace App\Http\Controllers;

use App\Models\Administradore;
use App\Models\Empleado;
use Illuminate\Http\Request;

/**
 * Class AdministradoreController
 * @package App\Http\Controllers
 */
class AdministradoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradores = Administradore::paginate();

        return view('administradore.index', compact('administradores'))
            ->with('i', (request()->input('page', 1) - 1) * $administradores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administradore = new Administradore();
        $empleado = Empleado::pluck("nombre","id");
        return view('administradore.create', compact('administradore','empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Administradore::$rules);

        $administradore = Administradore::create($request->all());

        return redirect()->route('administradores.index')
            ->with('success', 'Administradore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administradore = Administradore::find($id);

        return view('administradore.show', compact('administradore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administradore = Administradore::find($id);
        $empleado = Empleado::pluck("nombre","id");
        return view('administradore.edit', compact('administradore','empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Administradore $administradore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administradore $administradore)
    {
        request()->validate(Administradore::$rules);

        $administradore->update($request->all());

        return redirect()->route('administradores.index')
            ->with('success', 'Administradore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $administradore = Administradore::find($id)->delete();

        return redirect()->route('administradores.index')
            ->with('success', 'Administradore deleted successfully');
    }
}
