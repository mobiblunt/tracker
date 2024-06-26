<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Inertia\Inertia;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = Pizza::all();
        
        return Inertia::render('Pizzas/All', [
            'pizzas' => $pizzas
        ]);
    }

    public function edit(Pizza $pizza) {
        
        
        return Inertia::render('Pizzas/Edit', [
            'pizza' => $pizza
        ]);
    }

    public function update(Pizza $pizza, Request $request) {
        
        
        $pizza->update([
            'status' => $request->status
        ]);
    }
}
