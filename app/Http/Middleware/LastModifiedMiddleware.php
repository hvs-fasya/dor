<?php namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class LastModifiedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //$LastModified_unix = '1441277995'; // время последнего изменения страницы
        //$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
        $LastModified_unix = strtotime( Content::max('updated_at') );

        /**
         * @var \Illuminate\Http\Response $response
         */
        $response = $next($request);
        $IfModifiedSince = false;
        if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
            //$IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
            $IfModifiedSince = Carbon::parse($_SERVER['HTTP_IF_MODIFIED_SINCE'])->timestamp;
        }
        if ($IfModifiedSince && ($IfModifiedSince >= $LastModified_unix)) {
            $response->setNotModified();
        } else {
            $response->setLastModified(Carbon::createFromTimestamp($LastModified_unix));
            //$response->header('Last-Modified', $LastModified);
        }

        return $response;
        //return $next($request);
    }

}
