<?php

namespace App\Http\Middleware;
use Validator;
use Closure;

class RouteValidator
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
        $validator = Validator::make($request->all(), [
            'params' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('error');
        } else {
            return $next($request);
        }
    }
}
