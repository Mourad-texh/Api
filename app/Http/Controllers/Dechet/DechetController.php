<?php

namespace App\Http\Controllers\Dechet;

use App\Http\Controllers\Controller;
use App\Models\Dechet;
use Illuminate\Http\Request;

class DechetController extends Controller
{
    public function store_dechet(Request $request)
    {
        if ($request) {
            $var = [
                'nombre_dechet' => $request->nom_fournisseur,
            ];
            $insert = Dechet::firstOrCreate($var);
            return $insert;

        }
    }

    public function showDechet(){
        $test = new Dechet();
        return $test->getDechet();
    }

    public function detailDechet($id){
        $test = Dechet::findOrfail($id);
        return $test;
    }
}
