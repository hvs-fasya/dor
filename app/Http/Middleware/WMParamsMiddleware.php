<?php namespace App\Http\Middleware;

use Closure;

class WMParamsMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $wm_params = [];

        if ($request->has('w')) $wm_params = array_add($wm_params, 'wmid', $request->get('w'));

        if ($request->has('sub')) $wm_params = array_add($wm_params, 'sub', $request->get('sub'));

        if (count($wm_params) > 0) session($wm_params);

        return $next($request);
    }

}
