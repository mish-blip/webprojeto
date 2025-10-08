<?php

namespace App\Controllers;

use App\Models\User;
use Flight;

class UserController
{
    public function showRegistrationForm() // mostrar o forms
    {
        Flight::render('cadastro'); //cadastro.php em views
    }

    // método para processar o formulário de cadastro
    public function store()
    {
        // 1. Pega todos os dados enviados no forms
        $data = Flight::request()->data;

        // 2. CRIPTOGRAFA A SENHA
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // 3. O método 'create' usa a lista '$fillable' e cria o usuário
        User::create($data->getData());

        // 4. Redireciona para a pagina seguinte
        Flight::redirect('/login');
    }
}