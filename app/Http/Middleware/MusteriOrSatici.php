<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusteriOrSatici
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Kullanıcı giriş yapmış ve rolü Müşteri veya Satıcı ise
        if (Auth::check() &&
        (
                Auth::user()->Role === 'Müşteri' ||
                Auth::user()->Role === 'Satici'
            )
        ) {
            return $next($request);
        }

        // Aksi halde erişimi engelle
        abort(403, 'Bu sayfaya erişim yetkiniz yok.');
    }
}
