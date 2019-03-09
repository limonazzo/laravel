<?php

namespace App\Http\Middleware;

use Closure;

class RemoveHtmlGarbage
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
        $response = $next($request);
        $output = $response->getOriginalContent();

        $filters = [
            '/<!--(.|\s)*?-->/' => ''
        ];

        $output = preg_replace(array_keys($filters), array_values($filters), $output);
        $response->setContent($output);
        return $response;
    }
}
