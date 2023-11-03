<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;
use DB;

class SubdomainConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $subdomain = explode('.', $_SERVER['HTTP_HOST'])[0];

        $tenant = Tenant::where('subdomain', $subdomain)->where('status', 'active')->whereDate('expired_on', '>=', Carbon::today())->firstOrFail();
        if ($tenant && $subdomain != env('APP_MAIN_DOMAIN')) :
            Config::set('database.connections.mysql.database', $tenant->database);
            DB::purge('mysql');
        else :
            Config::set('database.connections.mysql.database', env('DB_DATABASE'));
            DB::purge('mysql');
        endif;

        return $next($request);
    }
}
