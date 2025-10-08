<?php
namespace App\Controllers;
use Flight;

class DashboardController
{
    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            Flight::redirect('/projeto-flight/public/login');
            die();
        }

        $viewData = [
            'userName' => $_SESSION['user_name']
        ];

        Flight::render('dashboard', $viewData);
    }
}