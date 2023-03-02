<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Facades\Preferences;
use App\Preferences\LocalePreference;

class RootRedirectController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        if (auth()->check()) {
            return redirect(Preferences::get('locale'));
        }

        return redirect((new LocalePreference)->default());
    }
}
