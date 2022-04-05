<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Variante;

class VariantesController extends Controller
{
    public function index(){
        $variantes = Variante::limit(20)->get();
        return $variantes;
    }
    
}
