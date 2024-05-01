<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Inertia\Inertia;

class PublicPizzaController extends Controller
{
    public function show(Pizza $pizza) {
        return Inertia::render('Pizzas/Show', [
            'pizza' => $pizza
        ]);
    } 
}
