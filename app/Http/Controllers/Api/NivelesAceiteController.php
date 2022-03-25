<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NivelGasolina;

class NivelesAceiteController extends Controller
{
    public function index() {
        $nivelesGasolina = NivelGasolina::select('id', 'nivel')->get();
        return $nivelesGasolina;
    }
}
