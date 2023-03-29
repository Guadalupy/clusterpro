<?php

namespace App\Http\Controllers;

use App\Models\Boletine;
use Illuminate\Http\Request;

/**
 * Class BoletineController
 * @package App\Http\Controllers
 */
class BoletineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletines = Boletine::paginate();

        return view('boletine.index', compact('boletines'))
            ->with('i', (request()->input('page', 1) - 1) * $boletines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boletine = new Boletine();
        return view('boletine.create', compact('boletine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Boletine::$rules);

        $boletine = Boletine::create($request->all());

        return redirect()->route('boletines.index')
            ->with('success', 'Boletine created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boletine = Boletine::find($id);

        return view('boletine.show', compact('boletine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boletine = Boletine::find($id);

        return view('boletine.edit', compact('boletine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Boletine $boletine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boletine $boletine)
    {
        request()->validate(Boletine::$rules);

        $boletine->update($request->all());

        return redirect()->route('boletines.index')
            ->with('success', 'Boletine updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $boletine = Boletine::find($id)->delete();

        return redirect()->route('boletines.index')
            ->with('success', 'Boletine deleted successfully');
    }
}
