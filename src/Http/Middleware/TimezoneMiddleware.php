<?php

namespace Signum\Timezone\Http\Middleware;

use Closure;

class TimezoneMiddleware{

    public function handle($request, Closure $next, $guard = null){
        if($request->has('user') && $request->user=='admin'){
            dd('You checked my code it seems :D');
        }
        return $next($request);
    }
}
