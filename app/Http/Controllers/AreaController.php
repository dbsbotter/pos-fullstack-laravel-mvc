<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{
    /**
     * @var \App\Models\Area
     */
    protected $area;

    public function __construct(Area $areas)
    {
        $this->middleware('auth');
        $this->area = $areas;
    }

    public function index()
    {
        $areas = $this->area->all();
        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(AreaRequest $request)
    {
        $area = new Area();
        $area->fill($request->all());
        $area->save();

        return redirect()->route('areas.index');
    }

    public function edit($id)
    {
        $area = $this->area->findOrFail($id);
        return view('areas.edit', compact('area'));
    }

    public function update(AreaRequest $request, $id)
    {
        $area = $this->area->findOrFail($id);
        $area->fill($request->all());
        $area->save();

        return redirect()->route('areas.index');
    }

    public function destroy($id)
    {
        $area = $this->area->findOrFail($id);
        $area->delete();

        return redirect()->route('areas.index');
    }
}
