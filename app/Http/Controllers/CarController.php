<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
    $data = [
        'marca' => 'Renault',
        'modello' => 'Clio',
        'carburante' => 'Diesel',
        'porte' => 5
    ];
        return view('cars', $data);
    }
}
