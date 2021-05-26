<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryPeopleMiddleware
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
        $user = Auth::user();

        if($user->people->category_id == Category::NORMAL)
            return redirect()->route('peoples.show', ['people' => $user->people_id]);

        return $next($request);
    }
}
