<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        return view('home');
    }

    public function optic(): View
    {
        $db = DB::connection('optic');

        return view('panel.page', [
            'title' => 'Optic Analytics',
            'partial' => 'panel.optic',
            'totalRequests' => $db->table('requests')->count(),
            'todayRequests' => $db->table('requests')
                ->whereDate('requested_at', today())
                ->count(),
            'iranRequests' => $db->table('requests')
                ->where('country_code', 'IR')
                ->count(),
            'requests' => $db->table('requests')
                ->orderByDesc('requested_at')
                ->limit(50)
                ->get(),
        ]);
    }

    public function redirections(): View
    {
        return $this->page('URL Redirect Management', 'panel.redirection');
    }

    public function urls(): View
    {
        return $this->page('URL Management', 'panel.url');
    }

    public function settings(): View
    {
        return $this->page('Website Settings', 'panel.main');
    }

    public function security(): View
    {
        return $this->page('Security', 'panel.security');
    }

    private function page(string $title, string $partial): View
    {
        return view('panel.page', compact('title', 'partial'));
    }
}
