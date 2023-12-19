<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function index() {
        $merchandises = Merchandise::orderBy('brand')->get();
        return response()->json($merchandises);
    }

    public function view(Merchandise $merchandise) {
        return response()->json([
            'status' => 'OK',
            'data' => $merchandise,
        ]);
    }
}
