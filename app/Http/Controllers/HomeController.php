<?php

namespace App\Http\Controllers;

use App\Models\Study;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Study $studies)
    {
        $this->middleware('auth');
        $this->study = $studies;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $atraso = $this->study->where('status', '=', 'Em atraso')->count();
        $andamento = $this->study->where('status', '=', 'Em andamento')->count();
        $finalizado = $this->study->where('status', '=', 'Finalizado')->count();

        return view('home', compact('atraso', 'andamento', 'finalizado'));
    }
}
