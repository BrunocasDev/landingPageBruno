<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(RegistrationRequest $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'Inscrição realizada com sucesso!'
        ]);
    }
}
