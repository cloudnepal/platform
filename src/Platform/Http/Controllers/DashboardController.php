<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index()
    {
        return view('platform::index', [
            'widgets' => config('platform.main_widgets', []),
        ]);
    }
}
