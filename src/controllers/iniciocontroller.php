<?php
namespace App\Controllers;
use Flight;

class InicioController
{
    public function index()
    {
        Flight::render('inicio');
    }
}