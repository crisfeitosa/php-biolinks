<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke() {
        /** @var User */
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()
                ->orderBy('sort')
                ->get()
        ]);
    }
}
