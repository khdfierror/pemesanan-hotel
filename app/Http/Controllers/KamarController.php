<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Kamar;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class KamarController extends Controller
{
    public function index(Request $request)
    {
        $kamar = Kamar::query()
            ->transform(fn ($item) => [
                'id' => $item->id,
                'name' => $item->name,
                'total' => $item->total,
            ]);

        return Inertia::render('Kamar/Index', [
            'kamar' => $kamar,

        ]);
    }
}
