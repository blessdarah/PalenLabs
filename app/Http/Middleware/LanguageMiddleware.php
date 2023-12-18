<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $language = Session::get('language');
        // if(!$language) {
        //     $language = config('app.locale');
        // }
        //
        // App::setLocale($language);
        app()->setLocale($request->segment(1));

        URL::defaults(['locale' => $request->segment(1)]);
        // dd($language);
        return $next($request);
    }
}
