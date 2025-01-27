<?php

namespace Kepsondiaz\Lockscreen\Http\Controller\LockScreen;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LockScreenController extends Controller
{
    /**
     * Show unlock account view.
     */
    public function show(Request $request): \Illuminate\Contracts\Foundation\Application|Factory|View|Application
    {
        return view('lockscreen.locked');
    }

    /**
     * Confirm the user's password.
     *
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.latest_activity_at', now()->timestamp);

        return redirect()->intended();
    }
}
