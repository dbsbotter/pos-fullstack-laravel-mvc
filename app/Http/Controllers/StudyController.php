<?php

namespace App\Http\Controllers;

use App\Models\Study;
use App\Models\Area;
use App\Http\Requests\StudyRequest;

class StudyController extends Controller
{
    /**
     * @var \App\Models\Study
     */
    protected $study;

    /**
     * @var \App\Models\Area
     */
    protected $area;

    public function __construct(Study $studies, Area $areas)
    {
        $this->middleware('auth');
        $this->study = $studies;
        $this->area = $areas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = $this->study->paginate();
        return view('studies.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = $this->area->all();
        return view('studies.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StudyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyRequest $request)
    {
        $study = new Study();
        $study->fill($request->all());
        $study->save();

        return redirect()->route('studies.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = $this->area->all();
        $study = $this->study->findOrFail($id);

        return view('studies.edit', compact('areas', 'study'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudyRequest $request, $id)
    {
        $study = $this->study->findOrFail($id);
        $study->fill($request->all());
        $study->update();

        return redirect()->route('studies.index')
            // ->with(['msg' => 'Atualizado com sucesso'])
            ->withSuccess('Atualizado com sucesso');
            // Session success
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study = $this->study->findOrFail($id);
        $study->delete();

        return redirect()->route('studies.index');
    }
}
