<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ChartController extends Controller
{
    public function index()
    {
        $users = User::selectRaw('COUNT(birthdate) as count, MONTH(birthdate) as month')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        $data = [
            'bar_data' => $users->map(function ($item) { return $item->count; }),
        ];

        return view('examples.chart', $data);
    }
}
