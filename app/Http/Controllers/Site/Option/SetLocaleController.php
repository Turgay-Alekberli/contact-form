<?php

namespace App\Http\Controllers\Site\Option;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class SetLocaleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $lang)
    {
        $locales = config('app.available_locales');

        if (in_array($lang, $locales)) {
            App::setLocale($lang);
            session(['locale' => $lang]);
        }

        return redirect()->back();
    }
}
