<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $users = [
            [
                'name' => 'Tamara',
                'age' => 24,
            ],
            [
                'name' => 'Frank',
                'age' => 24,
            ],
        ];

        return view(
            "dashboard",
            [
                'users' => $users
            ]
        );
    }
}
